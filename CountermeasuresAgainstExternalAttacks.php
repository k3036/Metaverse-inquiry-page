<?php
/**
 * XSS対策:エスケープ処理
 *
 * @param string $str 対象の文字列
 * @return string 処理された文字列
 */

function h($str){/** XSS対策の関数hを生成*/
  return htmlspecialchars($str,ENT_QUOTES,'utf-8');
}

/**
 * CSRF対策
 * @param void
 * @return string $csrf_token
*/
function setToken(){/**CSRF対策の関数*/
  // トークンを生成
  // フォームからそのトークンを送信
  // 送信後の画面でそのトークンを照会
  // トークンを削除

  // session_start();ここでは不要、代わりにsignupFromMember.phpの最初にsession_start();を書く。

  $csrf_token = bin2hex(random_bytes(32));/** 破られにくい暗号化をおこなう */
  $_SESSION['csrf_token'] = $csrf_token ;

  return $csrf_token;

}