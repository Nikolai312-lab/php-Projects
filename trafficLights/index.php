<?php

$roadMap = [
  ['distance'=> "23", 'time'=>"23"],
  ['distance'=> "37", 'time'=>"30" ]
];


#function timePassed($roadMap){
#  while ($roadMap[0]['time'] <= $roadMap[0]['distance']) {
#    $roadMap[0]['time'] += $roadMap[0]['time'];
#  }
#}

while ($roadMap[0]['time'] <= $roadMap[0]['distance']) {
  $roadMap[0]['time'] += $roadMap[0]['time'];
}
while ($roadMap[1]['time'] <= $roadMap[1]['distance']) {
  $roadMap[1]['time'] += $roadMap[1]['time'];
}
echo "You will reach the end of the first stotlight at: " . $roadMap[0]['time'] ."<br> ";
echo "You'll reach the end of the second stotligh at: " . $roadMap[1]['time'];
#echo timePassed();
