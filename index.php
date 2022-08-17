<?php 


use Mexitek\PHPColors\Color;

include('vendor/autoload.php');    


// Initialize my color
$myBlue = new Color("#0054b2");

echo '<br />';

echo $myBlue->darken();
echo '<div style="height: 90px; width: 90px; background-color:'.$myBlue->darken().'">1</div>';
echo '<br />';
// 1a334d

echo $myBlue->lighten();
echo '<div style="height: 90px; width: 90px; background-color:'.$myBlue->lighten().'">2</div>';
echo '<br />';
// 8cb3d9

echo $myBlue->isLight();
echo '<div style="height: 90px; width: 90px; background-color:'.$myBlue->isLight().'">3</div>';
echo '<br />';
// false

echo $myBlue->isDark();
echo '<div style="height: 90px; width: 90px; background-color:'.$myBlue->isDark().'">4</div>';
echo '<br />';
// true

echo $myBlue->complementary();
echo '<div style="height: 90px; width: 90px; background-color:'.$myBlue->complementary().'">5</div>';
echo '<br />';
// 996633

echo $myBlue->getHex();
echo '<div style="height: 90px; width: 90px; background-color:'.$myBlue->getHex().'">6</div>';
echo '<br />';
// 336699

print_r( $myBlue->getHsl() );
echo '<br />';
// array( "H"=> 210, "S"=> 0.5, "L"=>0.4 );

print_r( $myBlue->getRgb() );
echo '<br />';
// array( "R"=> 51, "G"=> 102, "B"=>153 );

print_r($myBlue->makeGradient());
echo '<br />';
// array( "light"=>"8cb3d9" ,"dark"=>"336699" )

?>