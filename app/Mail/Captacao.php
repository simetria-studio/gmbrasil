<?php

namespace App\Mail;

use App\Models\Mails;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Captacao extends Mailable
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
        return $this->markdown('mail.contact')->subject('Inscrição do formulario EAD')->with(
            [
                'name' => $this->mail->name,
                'plano' => $this->mail->plano,
                'curso' => $this->mail->curso,
                'email' => $this->mail->email,
                'sexo' => $this->mail->sexo,
                'birth_date' => $this->mail->birth_date,
                'civil' => $this->mail->civil,
                'escolaridade' => $this->mail->escolaridade,
                'rg' => $this->mail->rg,
                'cpf' => $this->mail->cpf,
                'name_responsavel' => $this->mail->name_responsavel,
                'cpf_responsavel' => $this->mail->cpf_responsavel,
                'birth_date_responsavel' => $this->mail->birth_date_responsavel,
                'telefone' => $this->mail->telefone,
                'whatsapp' => $this->mail->whatsapp,
                'cep' => $this->mail->cep,
                'rua' => $this->mail->rua,
                'bairro' => $this->mail->bairro,
                'cidade' => $this->mail->cidade,
                'estado' => $this->mail->estado,
                'numero' => $this->mail->numero,
                'complemento' => $this->mail->complemento,
                'responsavel_franquia' => $this->mail->responsavel_franquia,
                'observacao' => $this->mail->observacao,
            ]
        );
    }
}
