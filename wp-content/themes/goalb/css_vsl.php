<?php
//CSSとして使うPHPファイルの一番上に記述
header('Content-Type: text/css;', 'charset=utf-8'); ?>
@charset "utf-8";

h2 {
  padding: 1rem 2rem;
  border-bottom: 3px solid #000;
  background: #3cb371;
}

/*== ボタン共通設定 */
.btn{
    /*アニメーションの起点とするためrelativeを指定*/
    position: relative;
  　　overflow: hidden;
    /*ボタンの形状*/
  text-decoration: none;
  display: inline-block;
    border: 1px solid #006400;/* ボーダーの色と太さ */
    padding: 10px 30px;
    text-align: center;
    outline: none;
    /*アニメーションの指定*/   
    transition: ease .2s;
}

/*ボタン内spanの形状*/
.btn span {
  position: relative;
  z-index: 3;/*z-indexの数値をあげて文字を背景よりも手前に表示*/
  color:#90ee90;
}

.btn:hover span{
  color:#3cb371;
}

/*== 背景が流れる（左から右） */
.bgleft:before {
  content: '';
    /*絶対配置で位置を指定*/
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
    /*色や形状*/
  background:#3cb371;/*背景色*/
  width: 100%;
  height: 100%;
    /*アニメーション*/
  transition: transform .6s cubic-bezier(0.8, 0, 0.2, 1) 0s;
  transform: scale(0, 1);
  transform-origin: right top;
}

/*hoverした際の形状*/
.bgleft:hover:before{
  transform-origin:left top;
  transform:scale(1, 1);
}


/*========= レイアウトのためのCSS ===============*/

body{
    vertical-align:middle; 
    padding: 100px 0;
    text-align: center;
}


p{
    margin: 0 0 10px 0;
}

?>