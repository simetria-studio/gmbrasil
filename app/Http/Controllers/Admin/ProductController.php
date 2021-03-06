<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
// use Intervention\Image\Image;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\ProductCategory;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public $sales_unit_array = [
        'P' => 'Curso',
        'M' => 'Produto',
        'MQ' => 'Serviço'
    ];
    public function novoProduto(Request $request)
    {
        $request->validate([
            'code'              => 'unique:products',
            'name'              => 'required|string',
            'brief_description' => 'required|string',
            'sales_unit'        => 'required|string',
            'value'             => 'required|string',
            'main_category'     => 'required|string',
        ]);

        $originalPath = storage_path('/app/public/product_image/');
        if (!file_exists($originalPath)) {
            mkdir($originalPath, 0777, true);
        }


        $products['code']               = $request->code;
        $products['name']               = mb_convert_case($request->name, MB_CASE_TITLE);
        $products['brief_description']  = $request->brief_description;
        $products['sales_unit']         = $request->sales_unit;
        $products['value']              = str_replace(['.', ','], ['', '.'], $request->value);
        $products['brand']              = $request->brand;
        $products['product_type']       = "simples";
        $products['weight']             = 12.0;
        $products['height']             = 12.0;
        $products['width']              = 12.0;
        $products['length']             = 12.0;
        $products['has_preparation']    = $request->has_preparation;
        $products['preparation_time']   = $request->has_preparation == 'S' ? $request->preparation_time : null;
        $products['main_category']      = $request->main_category;
        $products['sub_category']       = $request->sub_category;
        $products['description']        = $request->description;
        $products['status']             = 1;

        $products = Product::create($products);

        if ($products->id) {

            $main_category['product_id'] = $products->id;
            $main_category['category_id'] = $request->main_category;
            $main_category['category_pai'] = 'S';
            ProductCategory::create($main_category);

            if ($request->sub_category) {
                foreach ($request->sub_category as $sub_category) {
                    if ($sub_category) {
                        $sub_categorys['product_id'] = $products->id;
                        $sub_categorys['category_id'] = $sub_category;
                        $sub_categorys['category_pai'] = 'N';
                        ProductCategory::create($sub_categorys);
                    }
                }
            }



            $imageName = time() . '.' . $request->img_principal->extension();

            $request->img_principal->move(storage_path('/app/public/product_image/'), $imageName);
            ProductImage::create([
                'product_id' => $products->id,
                'image_name' => 'product_image/' . $imageName,
                'sequence' => 1,
            ]);

            // Imagens multiplos
            // if ($request->img_multipla) {
            //     foreach ($request->img_multipla as $for_img_multipla) {
            //         $width_max = 420;
            //         $height_max = 480;

            //         list($width_orig, $height_orig) = getimagesize($for_img_multipla);
            //         $ratio_orig = $width_orig / $height_orig;
            //         if ($width_max / $height_max > $ratio_orig) {
            //             $width_max = $height_max * $ratio_orig; //----
            //         } else {
            //             $height_max = $width_max / $ratio_orig; //----
            //         }
            //         $img_multipla = Image::make($for_img_multipla)->resize($width_max, $height_max);
            //         $img_name_m = Str::random() . '.' . $for_img_multipla->extension();
            //         $img_multipla->save($originalPath . $img_name_m);

            //         $count_sequence = ProductImage::where('product_id', $products->id)->orderByDesc('sequence')->first();

            //         $create_img_multipla['product_id'] = $products->id;
            //         $create_img_multipla['sequence']   = ($count_sequence->sequence + 1);
            //         $create_img_multipla['image_name'] = 'product_image/' . $img_name_m;
            //         ProductImage::create($create_img_multipla);
            //     }
            // }
        }

        return response()->json('oi');
    }

    public function atualizarProduto(Request $request)
    {
        // return response()->json('oi');
        $request->validate([
            'code'              => 'unique:products,code,' . $request->id,
            'name'              => 'required|string',
            'brief_description' => 'required|string',
            'sales_unit'        => 'required|string',
            'value'             => 'required|string',
            'main_category'     => 'required|string',
        ]);

        $originalPath = storage_path('/app/public/product_image/');
        if (!file_exists($originalPath)) {
            mkdir($originalPath, 0777, true);
        }


        $products['code']               = $request->code;
        $products['name']               = mb_convert_case($request->name, MB_CASE_TITLE);
        $products['brief_description']  = $request->brief_description;
        $products['sales_unit']         = $request->sales_unit;
        $products['value']              = str_replace(['.', ','], ['', '.'], $request->value);
        $products['brand']              = $request->brand;
        $products['product_type']       = "simples";
        $products['weight']             = 12.0;
        $products['height']             = 12.0;
        $products['width']              = 12.0;
        $products['length']             = 12.0;
        $products['has_preparation']    = $request->has_preparation;
        $products['preparation_time']   = $request->has_preparation == 'S' ? $request->preparation_time : null;
        $products['description']        = $request->description;
        $products['status']             = 1;

        $products = Product::where('id', $request->id)->update($products);


        if ($request->img_principal) {

            $imageName = time() . '.' . $request->img_principal->extension();

            $request->img_principal->move(storage_path('/app/product_image/'), $imageName);

            $img_update_principal = ProductImage::where('product_id', $request->id)->where('sequence', '1')->first();
            // Storage::delete($img_update_principal->image_name);

            $create_img_principal['image_name'] = 'product_image/' . $imageName;
            $img_update_principal->update($create_img_principal);
        }


        // if ($request->img_multipla) {
        //     $img_deleta_multiplas = ProductImage::where('product_id', $request->id)->where('sequence', '>=', '2')->get();
        //     foreach ($img_deleta_multiplas as $imgdm) {
        //         Storage::delete($imgdm->image_name);
        //         ProductImage::where('id', $imgdm->id)->delete();
        //     }

        //     foreach ($request->img_multipla as $for_img_multipla) {
        //         $count_sequence = ProductImage::where('product_id', $request->id)->orderByDesc('sequence')->first();

        //         $width_max = 420;
        //         $height_max = 480;

        //         list($width_orig, $height_orig) = getimagesize($for_img_multipla);
        //         $ratio_orig = $width_orig / $height_orig;
        //         if ($width_max / $height_max > $ratio_orig) {
        //             $width_max = $height_max * $ratio_orig; //----
        //         } else {
        //             $height_max = $width_max / $ratio_orig; //----
        //         }
        //         $img_multipla = Image::make($for_img_multipla)->resize($width_max, $height_max);
        //         $img_name_m = Str::random() . '.' . $for_img_multipla->extension();
        //         $img_multipla->save($originalPath . $img_name_m);

        //         $create_img_multipla['product_id'] = $request->id;
        //         $create_img_multipla['sequence']   = ($count_sequence->sequence + 1);
        //         $create_img_multipla['image_name'] = $img_multipla;
        //         ProductImage::create($create_img_multipla);
        //     }
        // }

        ProductCategory::where('product_id', $request->id)->delete();

        $main_category['product_id'] = $request->id;
        $main_category['category_id'] = $request->main_category;
        $main_category['category_pai'] = 'S';
        ProductCategory::create($main_category);

        if ($request->sub_category) {
            foreach ($request->sub_category as $sub_category) {
                if ($sub_category) {
                    $sub_categorys['product_id'] = $request->id;
                    $sub_categorys['category_id'] = $sub_category;
                    $sub_categorys['category_pai'] = 'N';
                    ProductCategory::create($sub_categorys);
                }
            }
        }


        // $product_image  = ProductImage::where('product_id', $request->id)->where('sequence', '1')->first();
        // if (!empty($product_image)) {
        //     $image          = Storage::get($product_image->image_name);
        //     $mime_type      = Storage::mimeType($product_image->image_name);
        //     $image          = 'data:' . $mime_type . ';base64,' . base64_encode($image);
        //     return response()->json('oi');
        //     $images_json = ProductImage::where('product_id', $request->id)->get();
        //     $data_images = [];
        //     \Log::info($images_json);
        //     foreach ($images_json as $imgjson) {
        //         // Pegando a imagem e tarnsformamndo em data
        //         $images         = Storage::get($imgjson->image_name);
        //         $mime_types     = Storage::mimeType($imgjson->image_name);
        //         $images         = 'data:' . $mime_types . ';base64,' . base64_encode($images);

        //         // Adiconando a um array para depois ser utilizados
        //         $data_images[] = [
        //             'sequence'  => $imgjson->sequence,
        //             'image'     => $images
        //         ];
        //     }

        // }
        return response()->json('oi');
    }

    public function inativarProduto(Request $request)
    {
        $product = Product::where('id', $request->product_id)->update(['status' => '0']);

        return response()->json(['product_id' => $request->product_id]);
    }
}
