<?php
$total_g = $_POST['total_g'];
$total_p = $_POST['total_p'];
$total_b = $_POST['total_b'];
$total_c = $_POST['total_c'];
$total_pp = $_POST['total_pp'];
$total_h = $_POST['total_h'];
$total_v = $_POST['total_v'];
$total_t = $_POST['total_t'];
$total_f = $_POST['total_f'];
$total = $_POST['total'];
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];
$bud_strong_g = $_POST['bud_strong_g'];
$bud_cold_g = $_POST['bud_cold_g'];
$bud_hot_g = $_POST['bud_hot_g'];
$bud_strong_p = $_POST['bud_strong_p'];
$bud_hot_p = $_POST['bud_hot_p'];
$bud_cold_p = $_POST['bud_cold_p'];
$bud_strong_pp = $_POST['bud_strong_pp'];
$bud_cold_pp = $_POST['bud_cold_pp'];
$bud_hot_pp = $_POST['bud_hot_pp'];
$bud_strong_v = $_POST['bud_strong_v'];
$bud_hot_v = $_POST['bud_hot_v'];
$bud_cold_v = $_POST['bud_cold_v'];
$bud_hot_t = $_POST['bud_hot_t'];
$bud_strong_t = $_POST['bud_strong_t'];
$bud_cold_t = $_POST['bud_cold_t'];
$bud_strong_f = $_POST['bud_strong_f'];
$bud_hot_f = $_POST['bud_hot_f'];
$bud_cold_f = $_POST['bud_cold_f'];
$bud_strong_h = $_POST['bud_strong_h'];
$bud_hot_h = $_POST['bud_hot_h'];
$bud_cold_h = $_POST['bud_cold_h'];
$bud_strong_c = $_POST['bud_strong_c'];
$bud_hot_c = $_POST['bud_hot_c'];
$bud_cold_c = $_POST['bud_cold_c'];
$bud_strong_b = $_POST['bud_strong_b'];
$bud_hot_b = $_POST['bud_hot_b'];
$bud_cold_b = $_POST['bud_cold_b'];
$pro_s_g = $_POST['pro_s_g'];
$pro_h_g = $_POST['pro_h_g'];
$pro_c_g = $_POST['pro_c_g'];
$pro_s_p = $_POST['pro_s_p'];
$pro_h_p = $_POST['pro_h_p'];
$pro_c_p = $_POST['pro_c_p'];
$pro_s_v = $_POST['pro_s_v'];
$pro_c_v = $_POST['pro_c_v'];
$pro_h_v = $_POST['pro_h_v'];
$pro_s_pp = $_POST['pro_s_pp'];
$pro_c_pp = $_POST['pro_c_pp'];
$pro_h_pp = $_POST['pro_h_pp'];
$pro_s_f = $_POST['pro_s_f'];
$pro_c_f = $_POST['pro_c_f'];
$pro_h_f = $_POST['pro_h_f'];
$pro_s_t = $_POST['pro_s_t'];
$pro_c_t = $_POST['pro_c_t'];
$pro_h_t = $_POST['pro_h_t'];
$pro_s_c = $_POST['pro_s_c'];
$pro_c_c = $_POST['pro_c_c'];
$pro_h_c = $_POST['pro_h_c'];
$pro_s_h = $_POST['pro_s_h'];
$pro_c_h = $_POST['pro_c_h'];
$pro_h_h = $_POST['pro_h_h'];
$pro_s_b = $_POST['pro_s_b'];
$pro_c_b = $_POST['pro_c_b'];
$pro_h_b = $_POST['pro_h_b'];

echo $pro_s_v;

session_start();
$_SESSION['total_g'] = $total_g;
$_SESSION['total_p'] = $total_p;
$_SESSION['total_b'] = $total_b;
$_SESSION['total_c'] = $total_c;
$_SESSION['total_pp'] = $total_pp;
$_SESSION['total_h'] = $total_h;
$_SESSION['total_v'] = $total_v;
$_SESSION['total_t'] = $total_t;
$_SESSION['total_f'] = $total_f;
$_SESSION['total'] = $total;
$_SESSION['from_date'] = $from_date;
$_SESSION['to_date'] = $to_date;
$_SESSION['bud_strong_g'] = $bud_strong_g ;
$_SESSION['bud_cold_g'] = $bud_cold_g;
$_SESSION['bud_hot_g'] = $bud_hot_g ;
$_SESSION['bud_strong_p'] = $bud_strong_p ;
$_SESSION['bud_hot_p'] = $bud_hot_p;
$_SESSION['bud_cold_p'] = $bud_cold_p;
$_SESSION['bud_strong_pp'] = $bud_strong_pp;
$_SESSION['bud_cold_pp'] = $bud_cold_pp;
$_SESSION['bud_hot_pp'] = $bud_hot_pp;
$_SESSION['bud_strong_v'] = $bud_strong_v ;
$_SESSION['bud_hot_v'] = $bud_hot_v;
$_SESSION['bud_cold_v'] = $bud_cold_v ;
$_SESSION['bud_hot_t'] = $bud_hot_t ;
$_SESSION['bud_strong_t'] = $bud_strong_t;
$_SESSION['bud_cold_t'] = $bud_cold_t ;
$_SESSION['bud_strong_f'] = $bud_strong_f ;
$_SESSION['bud_hot_f'] =  $bud_hot_f;
$_SESSION['bud_cold_f'] = $bud_cold_f;
$_SESSION['bud_strong_h'] = $bud_strong_h ;
$_SESSION['bud_hot_h'] = $bud_hot_h;
$_SESSION['bud_cold_h'] = $bud_cold_h;
$_SESSION['bud_strong_c'] = $bud_strong_c;
$_SESSION['bud_hot_c'] = $bud_hot_c ;
$_SESSION['bud_cold_c'] = $bud_cold_c;
$_SESSION['bud_strong_b'] = $bud_strong_b;
$_SESSION['bud_hot_b'] = $bud_hot_b;
$_SESSION['bud_cold_b'] = $bud_cold_b;

$_SESSION['pro_s_g'] = $pro_s_g ;
$_SESSION['pro_h_g'] = $pro_h_g;
$_SESSION['pro_c_g'] = $pro_c_g;
$_SESSION['pro_s_p'] = $pro_s_p;
$_SESSION['pro_h_p'] = $pro_h_p;
$_SESSION['pro_c_p'] = $pro_c_p;
$_SESSION['pro_s_v'] = $pro_s_v;
$_SESSION['pro_c_v'] = $pro_c_v;
$_SESSION['pro_h_v'] = $pro_h_v;
$_SESSION['pro_s_pp'] = $pro_s_pp;
$_SESSION['pro_c_pp'] = $pro_c_pp;
$_SESSION['pro_h_pp'] = $pro_h_pp;
$_SESSION['pro_s_f'] = $pro_s_f;
$_SESSION['pro_c_f'] = $pro_c_f;
$_SESSION['pro_h_f'] = $pro_h_f;
$_SESSION['pro_s_t'] = $pro_s_t ;
 $_SESSION['pro_c_t'] = $pro_c_t;
 $_SESSION['pro_h_t'] = $pro_h_t;
$_SESSION['pro_s_c'] = $pro_s_c;
 $_SESSION['pro_c_c'] = $pro_c_c;
$_SESSION['pro_h_c'] = $pro_h_c;
$_SESSION['pro_s_h'] = $pro_s_h;
 $_SESSION['pro_c_h'] = $pro_c_h;
 $_SESSION['pro_h_h'] = $pro_h_h;
 $_SESSION['pro_s_b'] = $pro_s_b;
 $_SESSION['pro_c_b'] = $pro_c_b;
 $_SESSION['pro_h_b'] = $pro_h_b;

?>