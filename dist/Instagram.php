<?php
$name = $_GET['name'];

function getSimpleMediaByHashtag($hashtag){


        $random = 'J0HWVISlQAAAF0HWVCuAwAAAFjwA';
        $excludeIds = array('BcIp5dzBpf3', 'BkI6ZlUFf3L', 'BqA6ZCDBlsU', 'BoeWQMun2e5', 'BaCig7jhPMV');
        $bandedUsers = array(
            '3926081380',   // Cosy
            '2353537237',   // Barros Sports Shop
            '4158539063',   // Duiske Glass
            '6697436681',   // Kissans chemist
            '6037773637',   // Barrows Keep
            '7090848166',   // Life with Chewbella
            '211990278'     // Some Wedding

        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, sprintf("https://www.instagram.com/explore/tags/".$hashtag."/?__a=1"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $headers = array();
        $headers[] = "Cookie:  csrftoken=$random;";
        $headers[] = "X-Csrftoken: $random";
        $headers[] = "Referer: https://www.instagram.com/";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);

        $media;
        if ($response) {
            $response = (array)json_decode($response, true);
            $media = $response[graphql][hashtag][edge_hashtag_to_media][edges];
        } else {
            return false;
        }

        foreach ($media as $key => $value) {
            $v = $value[node];
            $image = $v[display_url];
            $id = $v[shortcode];
            $description = $v[edge_media_to_caption][edges][0][node][text];
            $user = $v[owner][id];
            
            if ($i <= 24) {
                // Check if USER is baned
                if (!in_array($user, $bandedUsers)) {
                    // Check image to exclude based on ID
                    if (!in_array($id, $excludeIds)) {
                        echo '<li><a href="https://www.instagram.com/p/'.$id.'" target="_blank"><img src="' . $image . '" alt="' . $description . '" title="'. $description .'" /></a></li>';
                        $i++;
                    }
                }
            }
        }
    }

    getSimpleMediaByHashtag($name);
    ?>