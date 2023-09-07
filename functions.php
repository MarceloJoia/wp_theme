<?php

/**
 * Fancy Labs functions and definitions
 * 
 * @link https://joiamarketing.com.br/
 * 
 * @package Fancy Lab
 */

function fancy_lab_scripts()
{
    /**
     * Estilo de enfileiramento [style.css] é carregado aqui.
     * Essa função precisa ser relacionada a um tipo de ação para associar a um Gancho
     * 
     * @var mixed $handle Recebe o [nome_para_folha_de_estilo] É o identificador do arquivo na fila.
     * @var string $src Recebe o [Path] até o arquivo de [style.css], a função [ get_stylesheet_uri() ] fará isso.
     * @var array $deps Recebe uma folha de estilo independente, que deve ser carregada antes do estylo principal. Exemplo: [ array('style_reset') ] se não existir dependência dexe o array()) vazio.
     * @var bool $ver Recebe a versão do arquivo, Esse agumento  recebe um FALSE
     * @var mixed $media Recebe o type de media pode ser: [ 'print' ou 'all' ou 'screen'...]
     */
    wp_enqueue_style('fancy_lab_style', get_stylesheet_uri(), array(), '1.0', 'all');
}

/** 
 * Faz o gancho da [fancy_lab_scripts] usaremos a função [ add_action() ].
 * Essa função [ add_action(..) ] é carregado na inicialização do Wordpress
 * 
 * $hook_name Recebe o SCRIPT_LOADER ['wp_enqueue_scripts'] QUE ESTÁ NO PATH:[require ABSPATH . WPINC . '/script-loader.php';]
 * $callback Recebe fancy_lab_scripts()
 */
add_action('wp_enqueue_scripts', 'fancy_lab_scripts');
