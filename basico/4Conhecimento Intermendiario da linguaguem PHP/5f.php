<?php
//Função recursiva
$nivel = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                )
            ),

            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    array(
                        'nome_cargo'=>'Gerente de Contas Pagar',
                        'subordinados'=>array(
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                        )
                    ),

                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            array(
                                'nome_cargo'=>'Supercisor de Suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'Compradores'
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    )
);
function show($cargos){

    $txt = '<ul>';
    foreach($cargos as $cargo){
        $txt .='<li>';
        $txt .= $cargo['nome_cargo'];
        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $txt .= show($cargo['subordinados']);
        }
        $txt .='</li>';
    }
    $txt .= '</ul>';

    return $txt;
}
echo show($nivel);



echo"<hr />Olha como que está dentro do array <pre>";
print_r($nivel);
echo"</pre>";
?>