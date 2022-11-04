<div class="mobile-table">
<?php $valores=get_field( 'valores_por_pessoa_pacotes'); ?>
<?php foreach ($valores as $valor) : ?>
<?php if ( !empty( $valor[ 'tipos_de_viagem'] ) ) { $tipo_viagem=$valor[ 'tipos_de_viagem']; $tipo_viagem=urlAmigavel($tipo_viagem); } else { $tipo_viagem="Sem aéreo" ; $tipo_viagem=urlAmigavel($tipo_viagem); } $local=urlAmigavel( $valor[ "local_de_embarque"] ); ?>
    <div class="mobile-table-item qualquer <?= 'e_' . $tipo_viagem ?> <?= 'e_' . $local ?>">
        <?php if ($valor[ "hotel_pacotes"]): ?>
            <div class="cell-hotel">
                <p>HOTEL</p>
                <p>
                    <?=$valor[ "hotel_pacotes"] ?>
                </p>
                <p class="txt-categoria">
                    <?php if ( $valor[ 'categoria_hotel'] ) : ?>
                    <?=$valor[ "categoria_hotel"] ?>
                    <?php endif; ?>
                </p>
            </div>
        <?php endif ?>

        <div<?= (!$valor[ "hotel_pacotes"]) ? ' class="cell-hotel"' : ""; ?>>
            <p>Data da Viagem</p>
            <p>
                <?=$valor[ "data_embarque_pacotes"] ?>
                <?php if ( $valor[ "data_embarque_pacotes_final"] ) :?>
                    <?= " a " .$valor[ "data_embarque_pacotes_final"]; ?>
                <?php endif; ?>
            </p>
        </div>

        <?php if ( !$valor[ "ocultar_1"] && !empty($valor[ "preco_plano_1_pacotes"]) ) : ?>
            <div>
                <p><?=$valores[0][ "nome_plano_1_pacotes"] ?></p>
                <p data-cotacao="<?= get_field('cambio_do_real', 'option') ?>" data-valor="<?=$valor[ "preco_plano_1_pacotes"] ?>" class="converte">
                    <?=$valor[ "preco_plano_1_pacotes"] ?>
                </p>
            </div>
        <?php endif; ?>

        <?php if ( !$valor[ "ocultar_2"] && !empty($valor[ "preco_plano_2_pacotes"]) ) : ?>
            <div>
                <p><?=$valores[0][ "nome_plano_2_pacotes"] ?></p>
                <p data-cotacao="<?= get_field('cambio_do_real', 'option') ?>" data-valor="<?=$valor[ "preco_plano_2_pacotes"] ?>" class="converte">
                    <?=$valor[ "preco_plano_2_pacotes"] ?>
                </p>
            </div>
        <?php endif; ?>

        <?php if ( !$valor[ "ocultar_3"] && !empty($valor[ "preco_plano_3_pacotes"]) ) : ?>
            <div>
                <p><?=$valores[0][ "nome_plano_3_pacotes"] ?></p>
                <p data-cotacao="<?= get_field('cambio_do_real', 'option') ?>" data-valor="<?=$valor[ "preco_plano_3_pacotes"] ?>" class="converte">
                    <?=$valor[ "preco_plano_3_pacotes"] ?>
                </p>
            </div>
        <?php endif; ?>

        <?php if ( !$valor[ "ocultar_4"] && !empty($valor[ "preco_plano_4_pacotes"]) ) : ?>
            <div>
                <p><?=$valores[0][ "nome_plano_4_pacotes"] ?></p>
                <p data-cotacao="<?= get_field('cambio_do_real', 'option') ?>" data-valor="<?=$valor[ "preco_plano_4_pacotes"] ?>" class="converte">
                    <?=$valor[ "preco_plano_4_pacotes"] ?>
                </p>
            </div>
        <?php endif; ?>

        <div>            
            <?php if ( $valor[hotel_pacotes] ) : ?>
            <a href="<?= get_bloginfo('url') ?>/reserva/?pacote=<?= the_title() ?>&tipo=Reserva&hospedagem=<?= $valor[hotel_pacotes] ?>&data=<?= $valor[data_embarque_pacotes] ?>&periodo=<?= $valor[data_embarque_pacotes] ?> <?php if ( $valor[data_embarque_pacotes_final]  ) { echo " a " .$valor[data_embarque_pacotes_final]; } ?>" class="btn-table flex-center align-center">Reservar</a>
            <?php  else : ?>
            <a href="#" class="btn-table flex-center align-center">Reservar</a>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>
</div>

<style type="text/css">
    
    @media (max-width: 490px) {
    .col.select-pacote-box.flex.align-center.local-em{
        display: none;}
    }

</style>