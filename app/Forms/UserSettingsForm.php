<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class UserSettingsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('password', 'password',[
                'rules' => 'required|min:6|max:16|confirmed',
                'label' => 'Nova Senha'
            ])
            ->add('password_confirmation', 'password',[
                'label' => 'Confirme a Nova Senha'
            ]);
    }
}
