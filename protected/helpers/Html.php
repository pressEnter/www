<?php

class Html extends CHtml {

  /**
   * Generates an image tag from app images directory.
   * @param string $src the image URL
   * @param string $alt the alternative text display
   * @param array $htmlOptions additional HTML attributes (see {@link tag}).
   * @return string the generated image tag
   */
  public static function image($src, $alt = '', $htmlOptions = array()) {
    $a = strtolower(substr($src,0,7)) ;
    if (strtolower(substr($src,0,7)) != 'http://' && strtolower(substr($src,0,8)) != 'https://') {
      $src = Yii::app()->baseUrl . '/images/' . $src;
    }
    $htmlOptions['src'] =  $src;
    $htmlOptions['alt'] = $alt;
    return self::tag('img', $htmlOptions);
  }

}