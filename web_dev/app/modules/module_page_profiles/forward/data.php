<?php
/**
 * @author Anastasia Sidak <m0st1ce.nastya@gmail.com>
 *
 * @link https://steamcommunity.com/profiles/76561198038416053
 * @link https://github.com/M0st1ce
 *
 * @license GNU General Public License Version 3
 */

// Проверка поля 'profile' на пустоту.
empty( get_section( 'profile', false ) ) && header('Location: ' . $General->arr_general['site'] ) && exit;

// Импортируем класс который будет работать со страницей игрока.
use app\ext\Player;

// Создаём экземпляр класса с импортом подкласса Db и указанием Steam ID игрока.
$Player = new Player ( $General, $Db, get_section( 'profile', false ), (int) intval ( get_section( 'server_group', '0' ) ) );

// Задаём заголовок страницы.
$Modules->set_page_title( $General->arr_general['short_name'] . ' :: ' .  $Player->found[ $Player->server_group ]['name_servers'] . ' :: ' . $Modules->get_translate_phrase('_Player') . ' :: ' .  $Player->get_name() );

// Задаём описание страницы.
$Modules->set_page_description( $General->arr_general['short_name'] . " :: " .  $Player->found[ $Player->server_group ]['name_servers'] . " :: Steam ID :: " . get_section( 'profile', false ) . " :: Ранг - " . $Modules->get_translate_phrase( $Player->get_rank(), 'ranks_' . $Player->found[  $Player->server_group  ]['ranks_pack'] ) . " :: Количество очков - " .  $Player->get_value() );

// Задаём изображение страницы.
$Modules->set_page_image( $General->getAvatar( con_steam32to64( $Player->get_steam_32() ), 1 ) );