<?php
// 絵文字削除関数(第一引数:対象文字列, 第二引数:出力文字エンコード)
public function RemoveEmoji($str,$tmpl_enc='UTF-8')
{
    // 出力文字エンコーディングに存在しない文字コードを出力させない
    $this->mb_substitute_character('none');
 
    // 対象文字列を、指定の出力文字エンコードに変換する
    $str = mb_convert_encoding($str, $tmpl_enc, 'auto');
 
    // 正規表現で絵文字コードを抜き出し、一括削除したものを返り値として出力する
    //スマホ絵文字除去
    preg_replace("/[\xF0-\xF7][\x80-\xBF][\x80-\xBF][\x80-\xBF]/", "", $str);
    //ガラケー絵文字除去
    preg_replace("/(?:\xEE[\x80\x81\x84\x85\x88\x89\x8C\x8D\x90-\x9D\xAA-\xAE\xB1-\xB3\xB5\xB6\xBD-\xBF]|\xEF[\x81-\x83])[\x80-\xBF]/", "",$str))
 
    //変換後の文字列を返す
    return $str;
?>
