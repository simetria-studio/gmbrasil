<?php

namespace App\Mail;

use App\Models\Mails;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Cartao extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $mail;
    public function __construct(Mails $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.cartao')->subject('Inscrição do formulario de CARTAO')->with(
            [
                'regional' => $this->mail->regional,
                'diretor' => $this->mail->diretor,
                'titular' => $this->mail->titular,
                'birth_date_titular' => $this->mail->birth_date_titular,
                'cep' => $this->mail->cep,
                'rua' => $this->mail->rua,
                'bairro' => $this->mail->bairro,
                'cidade' => $this->mail->cidade,
                'estado' => $this->mail->estado,
                'numero' => $this->mail->numero,
                'complemento' => $this->mail->complemento,
                'civil' => $this->mail->civil,
                'rg' => $this->mail->rg,
                'cpf' => $this->mail->cpf,
                'naturalidade' => $this->mail->naturalidade,
                'uf' => $this->mail->uf,
                'nacionalidade' => $this->mail->nacionalidade,
                'pai' => $this->mail->pai,
                'mae' => $this->mail->mae,
                'telefone' => $this->mail->telefone,
                'whatsapp' => $this->mail->whatsapp,
                'email' => $this->mail->email,
                'deficiencia' => $this->mail->deficiencia,
                'tipo_def' => $this->mail->tipo_def,
                'plano' => $this->mail->plano,
                'tipo_plano' => $this->mail->tipo_plano,

                'dependente1' => $this->mail->dependente1,
                'birth_date_titular1' => $this->mail->birth_date_titular1,
                'cep1' => $this->mail->cep1,
                'rua1' => $this->mail->rua1,
                'bairro1' => $this->mail->bairro1,
                'cidade1' => $this->mail->cidade1,
                'estado1' => $this->mail->estado1,
                'numero1' => $this->mail->numero1,
                'complemento1' => $this->mail->complemento1,
                'civil1' => $this->mail->civil1,
                'rg1' => $this->mail->rg1,
                'cpf1' => $this->mail->cpf1,
                'naturalidade1' => $this->mail->naturalidade1,
                'uf1' => $this->mail->uf1,
                'nacionalidade1' => $this->mail->nacionalidade1,
                'pai1' => $this->mail->pai1,
                'mae1' => $this->mail->mae1,
                'telefone1' => $this->mail->telefone1,
                'whatsapp1' => $this->mail->whatsapp1,
                'email1' => $this->mail->email1,
                'deficiencia1' => $this->mail->deficiencia1,
                'tipo_def1' => $this->mail->tipo_def1,
                'plano1' => $this->mail->plano1,
                'tipo_plano1' => $this->mail->tipo_plano1,

                'dependente2' => $this->mail->dependente2,
                'birth_date_titular2' => $this->mail->birth_date_titular2,
                'cep2' => $this->mail->cep2,
                'rua2' => $this->mail->rua2,
                'bairro2' => $this->mail->bairro2,
                'cidade2' => $this->mail->cidade2,
                'estado2' => $this->mail->estado2,
                'numero2' => $this->mail->numero2,
                'complemento2' => $this->mail->complemento2,
                'civil2' => $this->mail->civil2,
                'rg2' => $this->mail->rg2,
                'cpf2' => $this->mail->cpf2,
                'naturalidade2' => $this->mail->naturalidade2,
                'uf2' => $this->mail->uf2,
                'nacionalidade2' => $this->mail->nacionalidade2,
                'pai2' => $this->mail->pai2,
                'mae2' => $this->mail->mae2,
                'telefone2' => $this->mail->telefone2,
                'whatsapp2' => $this->mail->whatsapp2,
                'email2' => $this->mail->email2,
                'deficiencia2' => $this->mail->deficiencia2,
                'tipo_def2' => $this->mail->tipo_def2,
                'plano2' => $this->mail->plano2,
                'tipo_plano2' => $this->mail->tipo_plano2,

                'dependente3' => $this->mail->dependente3,
                'birth_date_titular3' => $this->mail->birth_date_titular3,
                'cep3' => $this->mail->cep3,
                'rua3' => $this->mail->rua3,
                'bairro3' => $this->mail->bairro3,
                'cidade3' => $this->mail->cidade3,
                'estado3' => $this->mail->estado3,
                'numero3' => $this->mail->numero3,
                'complemento3' => $this->mail->complemento3,
                'civil3' => $this->mail->civil3,
                'rg3' => $this->mail->rg3,
                'cpf3' => $this->mail->cpf3,
                'naturalidade3' => $this->mail->naturalidade3,
                'uf3' => $this->mail->uf3,
                'nacionalidade3' => $this->mail->nacionalidade3,
                'pai3' => $this->mail->pai3,
                'mae3' => $this->mail->mae3,
                'telefone3' => $this->mail->telefone3,
                'whatsapp3' => $this->mail->whatsapp3,
                'email3' => $this->mail->email3,
                'deficiencia3' => $this->mail->deficiencia3,
                'tipo_def3' => $this->mail->tipo_def3,
                'plano3' => $this->mail->plano3,
                'tipo_plano3' => $this->mail->tipo_plano3,
                'pagamento' => $this->mail->pagamento,
                'boletoInp' => $this->mail->boletoInp,

            ]
        );
    }
}
