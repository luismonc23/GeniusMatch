<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


   include('simple_html_dom.php');
   header('Content-type: text/plain; charset=utf-8');

   $curl = curl_init();

   $url_root = "https://www.computrabajo.com.mx";

   $url_pre = "https://www.computrabajo.com.mx/trabajo-de-";

   $url_qparam = "?q=";

   $url_post = "&p=";

   $all_pages = array();

   $appdata = array();

   $data = array();

   //$queries = (object) $_POST['queries'];
   $queries = array(
     "1" => "programador",
        //"2" => "developer",
   );
   //echo json_encode($app_userdata);
   //return;
   $id = 0;

foreach ($queries as $key => $value) {
  $url_q = $value;
  $url = $url_pre . $url_q . $url_qparam . $url_q . $url_post;
   for($i=1; $i<2; $i++){
   	$urlc = $url . $i;

   	// curl_setopt($curl, CURLOPT_URL, $urlc);
   	// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //var_dump($urlc);
   	$result = file_get_html($urlc);
    //$result = curl_exec($curl);
    //$image = 'data-original';

    // foreach($result->find('div#p_ofertas') as $e){ //var_dump($e->find('div.bRS.bClick'));
    //   foreach($e->find('div.bRS.bClick') as $f){ //if($id == 0) var_dump($f);
    //      $data[$id]['id'] = $id;
    //      foreach($f->find('div.iO') as $g){
    //       foreach($g->find('t0') as $h){
    //         foreach($h->find('a') as $a){
    //         $data[$id]['title'] = $a->innertext;
    //         $data[$id]['href'] = $a->href . $url_root;
    //
    //
    //         //echo $h->{'data-original'} . '<br>';
    //        }
    //       }
    //      }
    //      foreach($f->find('div.iC') as $g){
    //       foreach($g->find('img') as $h){
    //
    //         $data[$id]['image'] = $h->{'data-original'};
    //
    //
    //         //echo $h->{'data-original'} . '<br>';
    //       }
    //      }
    //      //$id++;
    //   }
    // }

    foreach($result->find('div#p_ofertas') as $e){
      foreach($e->find('div.bRS.bClick') as $f){
        $data[$id]['id'] = $id;
        $data[$id]['image'] = "";
        $data[$id]['cv'] = "";

         foreach($f->find('div.iO') as $g){
          foreach($g->find('h2') as $h){
            foreach($h->find('a') as $a){
            $data[$id]['title'] = utf8_encode($a->innertext);
            $data[$id]['href'] = $url_root . $a->href;

            $result2 = file_get_html($data[$id]['href']);

            foreach($result2->find('section.detail_of') as $o){
              foreach($o->find('ul.p0') as $p){
                //foreach($o->find('div.bRS.bClick') as $p){
                $data[$id]['cv'] = utf8_encode(strip_tags($p->innertext));
              }
              //}
            }

            //echo $h->{'data-original'} . '<br>';
           }
          }
         }
        foreach($f->find('div.iC') as $g){

          foreach($g->find('img') as $h){

            $data[$id]['image'] = $h->{'data-original'};


            //echo $h->{'data-original'} . '<br>';
          }
          // foreach($g->find('img') as $h){
          //   //$data[$id]['id2'] = $id;
          //   //$data[$id]['image2'] = $h->{'data-original'};
          //
          //
          //   //echo $h->{'data-original'} . '<br>';
          // }

         }
         $id++;
        }
      }

     //$data[$i]['title'] = "Job X";

        //var_dump($e->innertext);
     //var_dump($result);
     //var_dump($data);
     //$data = $result;
     //array_push($data ,json_decode($result));
     //var_dump($data);
     // $matches = array();
     // preg_match_all('#<div[^>]*>(.*?)</div>#', $result, $matches);
     // echo "MATCHES";
     // var_dump($matches[1]);
     //  echo "MATCHES2";
     // var_dump($matches);

   	 //preg_match_all('!<div class="gO" id="p_ofertas">!', $result, $match);
   	 //$data[$i]['id'] = $match[1][0];
     //var_dump($match[1][0]);
   	 // preg_match_all('!id="p_ofertas"<th>Folio No\.:<\/th><td>.*?(\d{3,})<\/td>!', $result, $match);
   	 // $data[$i]['id'] = $match[1][0];
     // var_dump($match[1][0]);
     //
   	// preg_match_all('!<th>Fecha de registro:<\/th><td>(.*?)<\/td>!', $result, $match);
   	// $data[$i]['date'] = $match[1][0];
     //
   	// preg_match_all('!<th>Titulo:<\/th><td>(.*?)<\/td>!', $result, $match);
   	// $data[$i]['title'] = utf8_decode($match[1][0]);
     //
   	// preg_match_all('!<th>Nombre:<\/th><td>(.*?)<\/td>!', $result, $match);
   	// $data[$i]['name'] = utf8_decode($match[1][0]);
     //
   	// preg_match_all('!<th>Género:<\/th><td>(.*?)<\/td>!', $result, $match);
   	// $data[$i]['genre'] = $match[1][0];
     //
   	// preg_match_all('!<th>Institución:<\/th><td>(.*?)<\/td>!', $result, $match);
   	// $data[$i]['institution'] = utf8_decode($match[1][0]);
     //
   	// preg_match_all('!<th>Campus:<\/th><td>(.*?)<\/td>!', $result, $match);
   	// $data[$i]['campus'] = utf8_decode($match[1][0]);
     //
   	// preg_match_all('!<th>Entidad Federativa:<\/th><td>(.*?)<\/td>!', $result, $match);
   	// $data[$i]['state'] = utf8_decode($match[1][0]);
     //
   	// preg_match_all('/<th>Correo:<\/th><td>(?!$)(?:(.*?@.*?\..*?)<br\/>*)?(?:(.*?@.*?\..*?))?<\/td>*/m', $result, $match);
   	// $data[$i]['mail'] = $match[2][0];
     //
   	// //var_dump($match);
     //
   	// //preg_match_all('!<th>Folio No\.:<\/th><td>.*?(\d{3})<\/td>!', $result, $match);
   	// $data[$i]['mail2'] = $match[1][0];
     //
   	// preg_match_all('/<th>Correo:<\/th><td>(.*?) - (?!$)(?:(.*?)<br\/>*)?(?:(.*?))?<\/td>/m', $result, $match);
   	// //$data[$i]['phone_type'] = $match [1][0];
     //
   	// $data[$i]['phone'] = $match[3][0];
     //
   	// //preg_match_all('!<th>Folio No\.:<\/th><td>.*?(\d{3})<\/td>!', $result, $match);
   	// $data[$i]['phone2'] = $match[2][0];

    array_push($appdata, $data);
   }
   // code...
   // $fp = fopen('al '.$i.'.json', 'w');
   // fwrite($fp, json_encode($data));
   // fclose($fp);

 }
   //$data = $data[0];
   //echo json_encode($data);
   //print_r(json_encode($data));


   //array_to_csv_download($data, 'al '.$i.'.csv');
   echo json_encode($appdata);
   return;
?>
