<?php
$db=curl_link('http://lx.jdf.so:8082/link&key=a35fc0f2f60896103d55053aed2936a3');

preg_match('/(.*?)\|7200/i',$db,$m);


$dblink=$m[1];
$hl=curl_link('http://jdf.so:8082/link&key');

preg_match('/(.*?)\|10800/i',$hl,$m);


$hllink=$m[1];
$ey=curl_link('http://myeytv.com:8081/link&key=e4408a27b8bf933a218427f97d63e19c');

preg_match('/(.*?)\|14400/i',$ey,$m);


$eylink=$m[1];
$eylb=curl_link('http://myeytv.com:8880/yhtv/data/c117_0.xml');
preg_match('/<Server>(.*?)</i',$eylb,$m);
$eyip=$m[1];
$zm=curl_link('http://www.ipgogogo.com:8082/link&key');

preg_match('/(.*?)\|7200/i',$zm,$m);


$zmlink=$m[1];
$ab=curl_link('http://dfj.so:8082/link&key');

preg_match('/(.*?)\|21600/i',$ab,$m);


$ablink=$m[1];
$ng=curl_link('http://banana.jdf.so:8082/link&key');

preg_match('/(.*?)\|7200/i',$ng,$m);


$nglink=$m[1];
$hllb=curl_link('http://jdf.so:8880/hulutv/data/c92_0.xml');

preg_match('/<Server>(.*?)</i',$hllb,$m);
$hlip=$m[1];
$nglb=curl_link('http://banana.jdf.so:8880/banana/data/liveng.xml');

preg_match('/<Server>(.*?)</i',$nglb,$m);
$ngip=$m[1];
$zmlb=curl_link('http://www.ipgogogo.com:8880/pineapple/data/c94_0.xml');

preg_match('/<Server>(.*?)</i',$zmlb,$m);
$zmip=$m[1];
$ablb=curl_link('http://dfj.so:8080/icmszdiptv/data/c90_0.xml');

preg_match('/<Server>(.*?)</i',$ablb,$m);
$abip=$m[1];
$dblb=curl_link('http://lx.jdf.so:8880/lxjdf/data/c2_0.xml');

preg_match('/<Server>(.*?)</i',$dblb,$m);
$dbip=$m[1];
echo
'{
    "ret": 0,
    "statu_info": "success",
    "accountype": 3,
    "sinfo": "INTV",
    "Live": [
        {
            "Category": "壹粤TV",
            "id": 1,
            "name": "TVB翡翠台",
            "httpurl": "p2p://'.$eyip.'/5797160f00070a5bc61ffc1e681f3cbe.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 2,
            "name": "TVB互动新闻",
            "httpurl": "p2p://'.$eyip.'/5797160f000c0a0cc61ffd65296567bc.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 3,
            "name": "TVB新闻",
            "httpurl": "p2p://'.$eyip.'/5797161000014d9cc61ffe8e1ea00689.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 4,
            "name": "TVB新闻2台",
            "httpurl": "p2p://'.$eyip.'/5797168400059d88c621c4c945f765f6.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 5,
            "name": "TVB J5",
            "httpurl": "p2p://'.$eyip.'/5797160f0008f1dbc61ffc9a1b9b3ae2.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 6,
            "name": "TVB J2",
            "httpurl": "p2p://'.$eyip.'/579716330009f89bc620897e2431332f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 7,
            "name": "TVB明珠台",
            "httpurl": "p2p://'.$eyip.'/5797161e000f3e76c62038cf4f7f401e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 8,
            "name": "TVB华语剧台",
            "httpurl": "p2p://'.$eyip.'/579716b6000dadf1c6228a2a74e271ef.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 9,
            "name": "TVB为食台",
            "httpurl": "p2p://'.$eyip.'/5797161000001cecc61ffe401dd4102c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 10,
            "name": "TVB娱乐新闻",
            "httpurl": "p2p://'.$eyip.'/57971683000df898c621c304567543f9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 11,
            "name": "TVB经典",
            "httpurl": "p2p://'.$eyip.'/5797160f000db49cc61ffdd27c722b68.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 12,
            "name": "TVB体育",
            "httpurl": "p2p://'.$eyip.'/5797165b00047910c6212456358125e5.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 13,
            "name": "TVB粤语台",
            "httpurl": "p2p://'.$eyip.'/5797168400046cd8c621c47b7583218d.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 14,
            "name": "TVB星河粤语",
            "httpurl": "p2p://'.$eyip.'/5797168f000cf6ddc621f1a23b3d71cb.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 15,
            "name": "TVB星河",
            "httpurl": "p2p://'.$eyip.'/579716100002415cc61ffecc52a208a6.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 16,
            "name": "TVB日剧",
            "httpurl": "p2p://'.$eyip.'/5797166b000b763dc62164a076f94d73.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 17,
            "name": "TVB韩剧",
            "httpurl": "p2p://'.$eyip.'/5797166c0007271ec621676d3e3d4d0d.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 18,
            "name": "TVB8",
            "httpurl": "p2p://'.$eyip.'/57971639000771c5c620a0483f6c50b1.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 19,
            "name": "TVB window",
            "httpurl": "p2p://'.$eyip.'/5797168300061da7c621c1027eb91cc9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 20,
            "name": "TVB煲剧台",
            "httpurl": "p2p://'.$eyip.'/5797168300078b47c621c15f3b833f7d.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 21,
            "name": "HKC第一台",
            "httpurl": "p2p://'.$eyip.'/57971683000cc7e8c621c2b60d323b9f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 22,
            "name": "HKC重点新闻",
            "httpurl": "p2p://'.$eyip.'/5797169a0005142fc6221a961b60442e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 23,
            "name": "HKC财经",
            "httpurl": "p2p://'.$eyip.'/579716750005fb2ec6218a49449b76af.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 24,
            "name": "HKC新闻",
            "httpurl": "p2p://'.$eyip.'/579716750004ca7ec62189fb2fe50537.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 25,
            "name": "HKC直播新闻",
            "httpurl": "p2p://'.$eyip.'/579716a5000a4913c62246e3110c4674.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 26,
            "name": "HK耀才财经",
            "httpurl": "p2p://'.$eyip.'/579716a4000c36d1c62243795e561556.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 27,
            "name": "HKC儿童台",
            "httpurl": "p2p://'.$eyip.'/579716a500067a12c62245e919ed09cc.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 28,
            "name": "HKC Zee Zing",
            "httpurl": "p2p://'.$eyip.'/5797169000032e2dc621f30947632554.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 29,
            "name": "HKC Disney Junior粤语",
            "httpurl": "p2p://'.$eyip.'/5797169000049bcdc621f367709c3b71.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 30,
            "name": "HKC奇妙电视中文台",
            "httpurl": "p2p://'.$eyip.'/57ad3cbd000d01091ca801a025064d2a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 31,
            "name": "HKC奇妙电视英文台",
            "httpurl": "p2p://'.$eyip.'/57ad3cbd000b93691ca801434a5d273f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 32,
            "name": "HKC娱乐",
            "httpurl": "p2p://'.$eyip.'/5797169a0009d6f0c6221bce039120a4.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 33,
            "name": "HKC剧集",
            "httpurl": "p2p://'.$eyip.'/5797169a0003e37fc6221a4843d574ea.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 34,
            "name": "HKC CN卡通",
            "httpurl": "p2p://'.$eyip.'/579716a600050634c622497216033bd9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 35,
            "name": "HKC Animax",
            "httpurl": "p2p://'.$eyip.'/579716a600031eb4c62248f55b0f2190.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 36,
            "name": "HKC跑马18台",
            "httpurl": "p2p://'.$eyip.'/5797169a000644dfc6221ae428304b4c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 37,
            "name": "HKC澳门博览",
            "httpurl": "p2p://'.$eyip.'/5797169a0007758fc6221b3212e12057.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 38,
            "name": "HKC足球",
            "httpurl": "p2p://'.$eyip.'/5797173100025938c62467bc45611efd.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 39,
            "name": "HKC体育",
            "httpurl": "p2p://'.$eyip.'/57971731000389e8c624680a1fc76867.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 40,
            "name": "HKC电影1台",
            "httpurl": "p2p://'.$eyip.'/5797169a0001452fc622199c4a093415.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 41,
            "name": "HKC电影2台",
            "httpurl": "p2p://'.$eyip.'/5797169000086acec621f4600026370b.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 42,
            "name": "HKC HMC",
            "httpurl": "p2p://'.$eyip.'/5797169a000275dfc62219ea253a5003.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 43,
            "name": "HKC私人影院",
            "httpurl": "p2p://'.$eyip.'/579716830008bbf7c621c1ad2cac5015.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 44,
            "name": "HKC惊悚频道",
            "httpurl": "p2p://'.$eyip.'/5797169a0008a63fc6221b806cdc5542.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 45,
            "name": "HKC国家地理",
            "httpurl": "p2p://'.$eyip.'/579716a5000c6d83c622476f525d3112.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 46,
            "name": "HKC探索频道",
            "httpurl": "p2p://'.$eyip.'/579716a5000e91f3c62247fc51292253.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 47,
            "name": "HKC旅游生活",
            "httpurl": "p2p://'.$eyip.'/579716a500086193c62246662d6f09b0.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 48,
            "name": "HKC足球201",
            "httpurl": "p2p://'.$eyip.'/579716a4000e5b42c62244066ab1135f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 49,
            "name": "HKC体育202",
            "httpurl": "p2p://'.$eyip.'/579716a500010082c6224483219336bd.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 50,
            "name": "HKC跑马203",
            "httpurl": "p2p://'.$eyip.'/579716a50002e802c62244ff4bea5f6f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 51,
            "name": "HKC球彩台",
            "httpurl": "p2p://'.$eyip.'/579716a600013734c62248790d7f563e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 52,
            "name": "HKC赔率台65",
            "httpurl": "p2p://'.$eyip.'/5797169a000b4490c6221c2b19715656.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 53,
            "name": "野生频道 粤",
            "httpurl": "p2p://'.$eyip.'/579716830009afb7c621c1ec1f721390.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 54,
            "name": "RHK港视31",
            "httpurl": "p2p://'.$eyip.'/5797168f000e278dc621f1f020284d69.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 55,
            "name": "RHK港视32",
            "httpurl": "p2p://'.$eyip.'/5797169000008fddc621f25e714845f7.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 56,
            "name": "RHK港视33",
            "httpurl": "p2p://'.$eyip.'/5797169000023a6dc621f2cb51ea7cf2.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 57,
            "name": "NOW英超",
            "httpurl": "p2p://'.$eyip.'/579716a50004cf82c622457c3ed73ada.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 58,
            "name": "HKTV",
            "httpurl": "p2p://'.$eyip.'/57971683000ae067c621c23a3e5e6a5f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 59,
            "name": "高清亚洲台",
            "httpurl": "p2p://'.$eyip.'/5797160f000ad95cc61ffd172a052673.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 60,
            "name": "本港台",
            "httpurl": "p2p://'.$eyip.'/5797160f0005d9abc61ffbd04d8762f4.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 61,
            "name": "岁月留声",
            "httpurl": "p2p://'.$eyip.'/5797166b000914ddc62164044a420d30.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 62,
            "name": "星空卫视",
            "httpurl": "p2p://'.$eyip.'/579f0c65000f3892e53a3e3014042b52.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 63,
            "name": "道通天地",
            "httpurl": "p2p://'.$eyip.'/5797168f000b0f5cc621f12661d052d3.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 64,
            "name": "TVBS新闻",
            "httpurl": "p2p://'.$eyip.'/5797162500095c42c62052a637bf53d7.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 65,
            "name": "TVBS欢乐",
            "httpurl": "p2p://'.$eyip.'/57971625000b06d2c62053132c2e1f48.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 66,
            "name": "TVBS综合",
            "httpurl": "p2p://'.$eyip.'/579716200002d138c6203d712d4d3ab6.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 67,
            "name": "东森财经",
            "httpurl": "p2p://'.$eyip.'/5797163200072399c62084dc69d41e3d.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 68,
            "name": "东森新闻",
            "httpurl": "p2p://'.$eyip.'/57971625000f12c3c620541c70945ced.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 69,
            "name": "东森洋片",
            "httpurl": "p2p://'.$eyip.'/5797161800074c0bc6201f5704910d80.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 70,
            "name": "东森电影",
            "httpurl": "p2p://'.$eyip.'/579716180005a17bc6201ee91d5b75d9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 71,
            "name": "东森戏剧",
            "httpurl": "p2p://'.$eyip.'/5797165300074953c62105ce2d751829.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 72,
            "name": "东森综合",
            "httpurl": "p2p://'.$eyip.'/5797161f0009bea8c6203b4f0e874342.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 73,
            "name": "东森幼幼",
            "httpurl": "p2p://'.$eyip.'/5797161f000aef58c6203b9d26063ffc.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 74,
            "name": "台视HD",
            "httpurl": "p2p://'.$eyip.'/5797161f0003cb37c62039c950b33757.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 75,
            "name": "民视HD",
            "httpurl": "p2p://'.$eyip.'/5797161f00029a87c620397b44325058.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 76,
            "name": "华视HD",
            "httpurl": "p2p://'.$eyip.'/5797161f0006e367c6203a946fdd78db.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 77,
            "name": "中视",
            "httpurl": "p2p://'.$eyip.'/5797163a00004766c620a25b6b743b7f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 78,
            "name": "超视",
            "httpurl": "p2p://'.$eyip.'/5797161f00081417c6203ae2694c4652.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 79,
            "name": "中视HD",
            "httpurl": "p2p://'.$eyip.'/5797161f000575c7c6203a3648304709.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 80,
            "name": "迪斯尼卡通",
            "httpurl": "p2p://'.$eyip.'/5797162c000d3c7fc6206efc1c605115.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 81,
            "name": "momo亲子台",
            "httpurl": "p2p://'.$eyip.'/57971626000a49c4c62056cb4bb230a2.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 82,
            "name": "亚洲旅游",
            "httpurl": "p2p://'.$eyip.'/5797166c000002fec62165992d854cdf.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 83,
            "name": "中天亚洲",
            "httpurl": "p2p://'.$eyip.'/5797166c00057c8ec62167005c2e48c7.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 84,
            "name": "中天新闻",
            "httpurl": "p2p://'.$eyip.'/5797161f000c5cf8c6203bfb705229c7.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 85,
            "name": "中天综合",
            "httpurl": "p2p://'.$eyip.'/5797161f000dca98c6203c584fc011e6.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 86,
            "name": "中天娱乐",
            "httpurl": "p2p://'.$eyip.'/579716390009d325c620a0e45a1c3957.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 87,
            "name": "非凡新闻",
            "httpurl": "p2p://'.$eyip.'/57971625000bfa92c62053512752196c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 88,
            "name": "年代新闻",
            "httpurl": "p2p://'.$eyip.'/579716200001a088c6203d235fb96d60.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 89,
            "name": "好消息",
            "httpurl": "p2p://'.$eyip.'/579716260003dc73c620552519791f86.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 90,
            "name": "好消息1台",
            "httpurl": "p2p://'.$eyip.'/5797167500072bdec6218a9738d659b9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 91,
            "name": "大爱",
            "httpurl": "p2p://'.$eyip.'/579716260002abc3c62054d74942544a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 92,
            "name": "大爱二台",
            "httpurl": "p2p://'.$eyip.'/579716b6000c7d41c62289dc00c43161.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 93,
            "name": "三立新闻",
            "httpurl": "p2p://'.$eyip.'/57971625000d6832c62053af3dcf6ea1.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 94,
            "name": "三立台湾",
            "httpurl": "p2p://'.$eyip.'/5797162c0006923ec6206d4738e22ac4.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 95,
            "name": "三立都会",
            "httpurl": "p2p://'.$eyip.'/5797164900056351c620de427d60441c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 96,
            "name": "三立财经",
            "httpurl": "p2p://'.$eyip.'/5797166400094091c62148b759e0755a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 97,
            "name": "三立国际",
            "httpurl": "p2p://'.$eyip.'/5797162c000b54ffc6206e7f25292c8e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 98,
            "name": "纬来日本",
            "httpurl": "p2p://'.$eyip.'/5797162600091914c620567d7c8c08cf.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 99,
            "name": "纬来综合",
            "httpurl": "p2p://'.$eyip.'/5797162600050d23c62055733e6b233b.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 100,
            "name": "纬来育乐",
            "httpurl": "p2p://'.$eyip.'/57971632000b2f89c62085e50e4c6ce2.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 101,
            "name": "纬来戏剧",
            "httpurl": "p2p://'.$eyip.'/5797163200094809c620856935bf14e2.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 102,
            "name": "八大娱乐K台",
            "httpurl": "p2p://'.$eyip.'/5797165a0008115fc62121593c8c35d7.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 103,
            "name": "八大戏剧",
            "httpurl": "p2p://'.$eyip.'/5797165a00047f4fc621206f7b1447ba.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 104,
            "name": "八大第一台",
            "httpurl": "p2p://'.$eyip.'/57971638000bfdd4c6209d8a74ae4b34.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 105,
            "name": "八大综合",
            "httpurl": "p2p://'.$eyip.'/57971638000da864c6209df812426605.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 106,
            "name": "JET综合",
            "httpurl": "p2p://'.$eyip.'/5797162d0003b0bfc62070724bf4716f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 107,
            "name": "民视新闻",
            "httpurl": "p2p://'.$eyip.'/579716330007973ac62088e24eab75fd.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 108,
            "name": "Z频道",
            "httpurl": "p2p://'.$eyip.'/5797165a000c1d4fc6212263458a25c7.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 109,
            "name": "DIVA",
            "httpurl": "p2p://'.$eyip.'/5797165a00021deec6211fd361b57cbe.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 110,
            "name": "ELTA综合",
            "httpurl": "p2p://'.$eyip.'/579f0c64000763dfe53a38460eee08d6.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 111,
            "name": "公视HD",
            "httpurl": "p2p://'.$eyip.'/57971638000ed914c6209e4603653f36.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 112,
            "name": "寰宇综合",
            "httpurl": "p2p://'.$eyip.'/5797165a000d8af0c62122c046be20d0.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 113,
            "name": "Fx HD",
            "httpurl": "p2p://'.$eyip.'/579716520005e1f1c621018a7c780abe.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 114,
            "name": "纬来电影",
            "httpurl": "p2p://'.$eyip.'/5797162600013e23c620547a0e227945.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 115,
            "name": "第一剧场",
            "httpurl": "p2p://'.$eyip.'/5797163900023524c6209ef1681377fe.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 116,
            "name": "龙祥电影",
            "httpurl": "p2p://'.$eyip.'/57971632000e84a9c62086c05d5b237a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 117,
            "name": "卫视中文电影",
            "httpurl": "p2p://'.$eyip.'/579716100003aefcc61fff2a0fe23cc0.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 118,
            "name": "卫视中文",
            "httpurl": "p2p://'.$eyip.'/5797164900069401c620de90510159cc.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 119,
            "name": "星卫娱乐",
            "httpurl": "p2p://'.$eyip.'/579716490007c4b1c620dede422f5877.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 120,
            "name": "中国电影",
            "httpurl": "p2p://'.$eyip.'/579716b6000b4c91c622898e529f53ef.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 121,
            "name": "CineMax",
            "httpurl": "p2p://'.$eyip.'/5797162d00068c00c620712d781b3ad8.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 122,
            "name": "AXN电影",
            "httpurl": "p2p://'.$eyip.'/5797162c00096d7ec6206e024d9003f7.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 123,
            "name": "AXN HD",
            "httpurl": "p2p://'.$eyip.'/5797165a000aafafc62122054fb33e3c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 124,
            "name": "Sundance HD",
            "httpurl": "p2p://'.$eyip.'/5797165a00034e9ec621202138e43c89.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 125,
            "name": "卫视洋片HD",
            "httpurl": "p2p://'.$eyip.'/579716100005598dc61fff9713214053.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 126,
            "name": "Star World",
            "httpurl": "p2p://'.$eyip.'/579716330006299ac62088840a77733a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 127,
            "name": "龙华洋片",
            "httpurl": "p2p://'.$eyip.'/57971649000a6301c620df8970787d83.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 128,
            "name": "龙华动画",
            "httpurl": "p2p://'.$eyip.'/5797165b0000aa10c621235c0677594d.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 129,
            "name": "龙华戏剧",
            "httpurl": "p2p://'.$eyip.'/5797165b00034860c6212408568e0895.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 130,
            "name": "ELTA体育台",
            "httpurl": "p2p://'.$eyip.'/57971640000b5202c620bc9e5e8e0765.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 131,
            "name": "龙华偶像",
            "httpurl": "p2p://'.$eyip.'/5797165b000217b0c62123ba13ec5b3c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 132,
            "name": "ELTA影剧",
            "httpurl": "p2p://'.$eyip.'/579716490003f5b1c620dde4624b68d9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 133,
            "name": "好莱坞电影",
            "httpurl": "p2p://'.$eyip.'/57971618000c0ecbc620208f14f97980.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 134,
            "name": "壹电视新闻",
            "httpurl": "p2p://'.$eyip.'/5797164a00009a52c620e0f032e80359.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 135,
            "name": "壹电视综合",
            "httpurl": "p2p://'.$eyip.'/57971649000e3202c620e08321f61af2.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 136,
            "name": "国兴卫视",
            "httpurl": "p2p://'.$eyip.'/5797163200053c18c620845f26ca1882.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 137,
            "name": "东风卫视",
            "httpurl": "p2p://'.$eyip.'/579716530005dbb2c62105707d9620f9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 138,
            "name": "ASN",
            "httpurl": "p2p://'.$eyip.'/5797163f000d7cb0c620b9443b950878.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 139,
            "name": "M",
            "httpurl": "p2p://'.$eyip.'/57971648000dfb50c620dc8d074e1d75.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 140,
            "name": "法国时尚",
            "httpurl": "p2p://'.$eyip.'/5797170e000eddacc623e2381e504c4b.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 141,
            "name": "Li时尚生活",
            "httpurl": "p2p://'.$eyip.'/57971653000249a2c62104866adb640e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 142,
            "name": "韩国娱乐台",
            "httpurl": "p2p://'.$eyip.'/579717180004dcccc62406b835261ecb.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 143,
            "name": "美食星球",
            "httpurl": "p2p://'.$eyip.'/57971649000d0152c620e03526d4186f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 144,
            "name": "华纳电视",
            "httpurl": "p2p://'.$eyip.'/5797168400033c28c621c42d0c073179.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 145,
            "name": "时尚疯",
            "httpurl": "p2p://'.$eyip.'/57971699000cb86ec62218a34c624b46.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 146,
            "name": "华臧卫视",
            "httpurl": "p2p://'.$eyip.'/579716750002691ec621895f49b3167a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 147,
            "name": "莲花卫视",
            "httpurl": "p2p://'.$eyip.'/5797160f000190cac61ffab75d32018a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 148,
            "name": "新视觉HD",
            "httpurl": "p2p://'.$eyip.'/57971626000b7a74c62057193c1736f9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 149,
            "name": "新视觉英超",
            "httpurl": "p2p://'.$eyip.'/5797169000099b7ec621f4ae752515ff.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 150,
            "name": "国家地理音乐",
            "httpurl": "p2p://'.$eyip.'/57971652000c8c31c621033f5f7c2885.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 151,
            "name": "凤凰卫视",
            "httpurl": "p2p://'.$eyip.'/579f0c6600012702e53a3e7e26bb3268.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 152,
            "name": "凤凰资讯",
            "httpurl": "p2p://'.$eyip.'/5797160e000eeb8ac61ffa3a46c72429.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 153,
            "name": "凤凰香港",
            "httpurl": "p2p://'.$eyip.'/5797160f00033b5bc61ffb246e7646ec.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 154,
            "name": "香港精品",
            "httpurl": "p2p://'.$eyip.'/579716400003b401c620baab22583331.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 155,
            "name": "凤凰电影",
            "httpurl": "p2p://'.$eyip.'/579716ca000700b4c622d6940d1c4d5f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 156,
            "name": "CHC高清电影",
            "httpurl": "p2p://'.$eyip.'/579716180009ea5bc6202002675d6200.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 157,
            "name": "CHC家庭影院",
            "httpurl": "p2p://'.$eyip.'/579716cb00036865c622d99059bd2bf9.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 158,
            "name": "CHC动作电影",
            "httpurl": "p2p://'.$eyip.'/579716390008a275c620a0965e354f39.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 159,
            "name": "天映经典",
            "httpurl": "p2p://'.$eyip.'/579716e8000da679c6234d7827aa109a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 160,
            "name": "天映频道",
            "httpurl": "p2p://'.$eyip.'/5797164000028351c620ba5d117770c1.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 161,
            "name": "天映HD",
            "httpurl": "p2p://'.$eyip.'/5797173100047da8c62468483a7a2f35.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 162,
            "name": "卫视电影",
            "httpurl": "p2p://'.$eyip.'/5797172900074deac62449c055be7c4e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 163,
            "name": "靖天电影",
            "httpurl": "p2p://'.$eyip.'/57971674000b7afdc62187c918882cb3.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 164,
            "name": "RED红电影",
            "httpurl": "p2p://'.$eyip.'/579717290008f87bc6244a2d289d65e1.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 165,
            "name": "HBO",
            "httpurl": "p2p://'.$eyip.'/579716180008b9abc6201fb47e9e433c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 166,
            "name": "HBO家庭",
            "httpurl": "p2p://'.$eyip.'/5797165300037a52c62104d46bdd7a8a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 167,
            "name": "HBO原创",
            "httpurl": "p2p://'.$eyip.'/579716490002c500c620dd965784286e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 168,
            "name": "HBO强档",
            "httpurl": "p2p://'.$eyip.'/5797164900019450c620dd486a423a58.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 169,
            "name": "FOX家庭",
            "httpurl": "p2p://'.$eyip.'/57971640000a2152c620bc500c3f568a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 170,
            "name": "FOX MOVIES HD",
            "httpurl": "p2p://'.$eyip.'/5797166b00072d5dc6216387754f67a6.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 171,
            "name": "FOX优质电影",
            "httpurl": "p2p://'.$eyip.'/57971663000e467fc621461830da13fc.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 172,
            "name": "FOX警匪",
            "httpurl": "p2p://'.$eyip.'/5797164a0001cb02c620e13e23461d46.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 173,
            "name": "罪案侦缉",
            "httpurl": "p2p://'.$eyip.'/57971674000a873dc621878b183f7936.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 174,
            "name": "星卫电影",
            "httpurl": "p2p://'.$eyip.'/57971639000da226c620a1de64163f93.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 175,
            "name": "Warner TV",
            "httpurl": "p2p://'.$eyip.'/579716740009568dc621873d266a6002.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 176,
            "name": "美亚电影",
            "httpurl": "p2p://'.$eyip.'/57971639000c3485c620a18067575289.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 177,
            "name": "FOX",
            "httpurl": "p2p://'.$eyip.'/5797162600063dd3c62055c171e535bf.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 178,
            "name": "国家地理",
            "httpurl": "p2p://'.$eyip.'/579716400008f0a1c620bc0240dd4505.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 179,
            "name": "地理悠人",
            "httpurl": "p2p://'.$eyip.'/57971649000b93b1c620dfd7489b02c3.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 180,
            "name": "野生地理",
            "httpurl": "p2p://'.$eyip.'/57971639000b03d5c620a13268443b80.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 181,
            "name": "历史频道",
            "httpurl": "p2p://'.$eyip.'/5797164000065251c620bb571cb95c8c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 182,
            "name": "探索科学",
            "httpurl": "p2p://'.$eyip.'/5797165200078c81c62101f70d9e62d3.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 183,
            "name": "探索家庭",
            "httpurl": "p2p://'.$eyip.'/57971652000a2ad1c62102a3397831fe.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 184,
            "name": "Discovery",
            "httpurl": "p2p://'.$eyip.'/57971618000d3f7cc62020dd76a43d21.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 185,
            "name": "探索动力",
            "httpurl": "p2p://'.$eyip.'/57971652000b5b81c62102f1129d168c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 186,
            "name": "HISTORY 2",
            "httpurl": "p2p://'.$eyip.'/57971674000e194dc62188757ce17736.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 187,
            "name": "Universal Channel",
            "httpurl": "p2p://'.$eyip.'/579716740007e8edc62186df12871861.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 188,
            "name": "Bein体育1",
            "httpurl": "p2p://'.$eyip.'/5797168400009dd8c621c38169195938.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 189,
            "name": "Bein体育2",
            "httpurl": "p2p://'.$eyip.'/579716840001ce88c621c3cf1e4f224e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 190,
            "name": "SKY体育",
            "httpurl": "p2p://'.$eyip.'/579716a60008d535c6224a6c4be13b0f.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 191,
            "name": "足球",
            "httpurl": "p2p://'.$eyip.'/579716190008767dc620238b640b26aa.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 192,
            "name": "Sky News",
            "httpurl": "p2p://'.$eyip.'/57971653000118f2c621043847166c59.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 193,
            "name": "NBA",
            "httpurl": "p2p://'.$eyip.'/5797165300087a03c621061c45ae7ac7.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 194,
            "name": "NBA北美",
            "httpurl": "p2p://'.$eyip.'/57971729000b1cebc6244aba727e3a51.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 195,
            "name": "FOX Spoets HD",
            "httpurl": "p2p://'.$eyip.'/5797163f0009eaa0c620b85a7edb3dca.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 196,
            "name": "卫视体育",
            "httpurl": "p2p://'.$eyip.'/5797161900046a8cc620228270d22eb0.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 197,
            "name": "FOX PLUS",
            "httpurl": "p2p://'.$eyip.'/57971640000152a1c620ba0f7bfd2117.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 198,
            "name": "博斯运动",
            "httpurl": "p2p://'.$eyip.'/5797162d0001c93fc6206ff516c8716c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 199,
            "name": "博斯高尔夫",
            "httpurl": "p2p://'.$eyip.'/5797162c000f23ffc6206f794fbe623a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 200,
            "name": "Golf",
            "httpurl": "p2p://'.$eyip.'/57b1643b000ec24f2ce0f8b008d726a3.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 201,
            "name": "高尔夫网球",
            "httpurl": "p2p://'.$eyip.'/579716390000c784c6209e9470b86c78.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 202,
            "name": "高尔夫yy",
            "httpurl": "p2p://'.$eyip.'/5797170e000b4b9bc623e14e6ea76833.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 203,
            "name": "高尔夫",
            "httpurl": "p2p://'.$eyip.'/57971640000021f0c620b9c17ffc20aa.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 204,
            "name": "EDGE体育",
            "httpurl": "p2p://'.$eyip.'/5797166b00039b4cc621629d6bd01126.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 205,
            "name": "劲爆体育",
            "httpurl": "p2p://'.$eyip.'/57971690000acc2ec621f4fc6db803fc.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 206,
            "name": "格斗体育",
            "httpurl": "p2p://'.$eyip.'/5797169a0000147ec622194e213b747c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 207,
            "name": "yfy",
            "httpurl": "p2p://'.$eyip.'/579716650001d942c6214aba4553171d.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 208,
            "name": "欧洲体育",
            "httpurl": "p2p://'.$eyip.'/5797163900064115c6209ffa1e26617a.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 209,
            "name": "纬来体育",
            "httpurl": "p2p://'.$eyip.'/5797161f000f3838c6203cb6032b1fcd.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 210,
            "name": "ESPN",
            "httpurl": "p2p://'.$eyip.'/57971619000339dcc62022342db46d76.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 211,
            "name": "风云足球",
            "httpurl": "p2p://'.$eyip.'/579716c0000832e2c622afd25a011c54.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 212,
            "name": "欧洲足球",
            "httpurl": "p2p://'.$eyip.'/5797166c000af61fc621686775aa1718.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 213,
            "name": "卫视体育",
            "httpurl": "p2p://'.$eyip.'/579716cb00082b25c622dac8187c1a14.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 214,
            "name": "卫视体育2台",
            "httpurl": "p2p://'.$eyip.'/579716d50004d487c62300fe7518772b.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 215,
            "name": "NHK",
            "httpurl": "p2p://'.$eyip.'/5797161e000d93e6c620386255db5ee6.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 216,
            "name": "BBC",
            "httpurl": "p2p://'.$eyip.'/5797161f00012ce7c620391d0d434573.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 217,
            "name": "CNN",
            "httpurl": "p2p://'.$eyip.'/5797163300088afac62089204e9f54f4.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 218,
            "name": "新加坡亚洲新闻",
            "httpurl": "p2p://'.$eyip.'/57b5d1c9000bce6b3e2cea98428a13ac.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 219,
            "name": "高清影视",
            "httpurl": "p2p://'.$eyip.'/57971664000d0f91c62149b16e010d00.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 220,
            "name": "DOX测试",
            "httpurl": "p2p://'.$eyip.'/5797166c0001ea7ec621661603ab5587.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 221,
            "name": "DOX剧场",
            "httpurl": "p2p://'.$eyip.'/5797166400047dd0c621477f147d0b63.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 222,
            "name": "MTV",
            "httpurl": "p2p://'.$eyip.'/5797170e000dacfcc623e1ea59ce332c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 223,
            "name": "MTV音乐",
            "httpurl": "p2p://'.$eyip.'/579716ca00086e54c622d6f23f0150c8.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 224,
            "name": "MTV Live",
            "httpurl": "p2p://'.$eyip.'/57971674000cabadc621881724921950.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 225,
            "name": "FOX HD",
            "httpurl": "p2p://'.$eyip.'/57971722000de6efc62430194dd91dc0.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 226,
            "name": "Disney Channel",
            "httpurl": "p2p://'.$eyip.'/57971729000f28dbc6244bc305b90fab.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 227,
            "name": "DisneyXD",
            "httpurl": "p2p://'.$eyip.'/5797172a0000da5bc6244c01160f44ef.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 228,
            "name": "Disney Junior",
            "httpurl": "p2p://'.$eyip.'/5797172a00020b0cc6244c4f0e8b07de.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 229,
            "name": "MOVIESTAR F1",
            "httpurl": "p2p://'.$eyip.'/579717190001fb4ec62409e33fd7768e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 230,
            "name": "Astro全佳",
            "httpurl": "p2p://'.$eyip.'/5797172a0006cdccc6244d8759105ded.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 231,
            "name": "Astro双星",
            "httpurl": "p2p://'.$eyip.'/5797172a0007fe7cc6244dd50a3344bd.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 232,
            "name": "Astro华丽",
            "httpurl": "p2p://'.$eyip.'/5797172a0008f23cc6244e142428266c.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 233,
            "name": "Astro双喜",
            "httpurl": "p2p://'.$eyip.'/57971730000be4f7c62466455170486e.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 234,
            "name": "Astro喜悦",
            "httpurl": "p2p://'.$eyip.'/579717310005eb48c62468a65b552f42.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 235,
            "name": "Astro AEC",
            "httpurl": "p2p://'.$eyip.'/57971730000d5297c62466a311f35a78.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 236,
            "name": "Astro剧集首映",
            "httpurl": "p2p://'.$eyip.'/57971730000e4658c62466e11d770801.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 237,
            "name": "新加坡5",
            "httpurl": "p2p://'.$eyip.'/57971730000f3a18c624672034026d58.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "壹粤TV",
            "id": 238,
            "name": "新加坡8",
            "httpurl": "p2p://'.$eyip.'/5797173100016578c624677d3de24062.ts",
            "hotlink": "'.$eylink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 239,
            "name": "CHC高清电影",
            "httpurl": "p2p://'.$abip.'/57a2d2f200088d7b164eb7a434cd1855.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 240,
            "name": "CHC动作电影",
            "httpurl": "p2p://'.$abip.'/57a2d3b6000b63d41651b5ff4a7e48ce.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 241,
            "name": "CHC家庭影院",
            "httpurl": "p2p://'.$abip.'/57a2d3d2000d9045165223ee7cf1543e.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 242,
            "name": "中国电影",
            "httpurl": "p2p://'.$abip.'/57a2d3a5000bcdf6165173b24e2e5f7e.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 243,
            "name": "ATV World HD",
            "httpurl": "p2p://'.$abip.'/57a2d35b00041673165050a8157c0e9d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 244,
            "name": "凤凰中文",
            "httpurl": "p2p://'.$abip.'/57a2d2690001a87a164c9eb80e5739f3.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 245,
            "name": "凤凰资讯",
            "httpurl": "p2p://'.$abip.'/57a2d2d40002db76164e40ff39d763bf.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 246,
            "name": "凤凰香港",
            "httpurl": "p2p://'.$abip.'/57a2d2d4000985b7164e42b46eb31de6.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 247,
            "name": "香港精品台",
            "httpurl": "p2p://'.$abip.'/57a2d342000a6908164ff09f1aa16227.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 248,
            "name": "星空卫视",
            "httpurl": "p2p://'.$abip.'/57a2d268000dd28a164c9ded5455060a.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 249,
            "name": "莲花卫视",
            "httpurl": "p2p://'.$abip.'/57a2d2d400063096164e41d949592c14.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 250,
            "name": "HKTV",
            "httpurl": "p2p://'.$abip.'/57a2d3dd0008c5c816524dac7c23580f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 251,
            "name": "本港台",
            "httpurl": "p2p://'.$abip.'/57a2d2d5000036e8164e443a750d6d21.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 252,
            "name": "TVB J2",
            "httpurl": "p2p://'.$abip.'/57a2d33000037858164fa88871a330f0.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 253,
            "name": "TVB翡翠台",
            "httpurl": "p2p://'.$abip.'/57a2d2d5000442d8164e454321b916bc.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 254,
            "name": "TVB J5",
            "httpurl": "p2p://'.$abip.'/57a2d2d50009bc69164e46aa68362133.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 255,
            "name": "高清亚洲台",
            "httpurl": "p2p://'.$abip.'/57a2d2d5000ebc19164e47f13ad8140b.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 256,
            "name": "TVB互动新闻",
            "httpurl": "p2p://'.$abip.'/57a2d2d60002920a164e48bc78ab1918.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 257,
            "name": "TVB明珠台",
            "httpurl": "p2p://'.$abip.'/57a2d2fd0002186e164ee0f502487db2.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 258,
            "name": "V音乐台",
            "httpurl": "p2p://'.$abip.'/57a2d32f0005dff6164fa53d70403945.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 259,
            "name": "岁月留声",
            "httpurl": "p2p://'.$abip.'/57a2d38e00062d2d165118691db44703.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 260,
            "name": "Channel V HD",
            "httpurl": "p2p://'.$abip.'/57a2d375000a5b521650b7d3499e40b4.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 261,
            "name": "TVB8",
            "httpurl": "p2p://'.$abip.'/57a2d3380006d876164fc8a52d7855de.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 262,
            "name": "TVB1",
            "httpurl": "p2p://'.$abip.'/57a2d3d20000f294165220b36e8a5346.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 263,
            "name": "TVB2",
            "httpurl": "p2p://'.$abip.'/57a2d3d20004fe84165221bc5a373142.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 264,
            "name": "TVB经典",
            "httpurl": "p2p://'.$abip.'/57a2d2d6000754ca164e49f4608c1fc3.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 265,
            "name": "TVB星河",
            "httpurl": "p2p://'.$abip.'/57a2d2d70001d4fb164e4c74526f71d2.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 266,
            "name": "TVB体育",
            "httpurl": "p2p://'.$abip.'/57a2d3b6000eb8f41651b6da0f9e0688.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 267,
            "name": "TVB古装剧场",
            "httpurl": "p2p://'.$abip.'/57a2d3d200094765165222d52dbc4a6b.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 268,
            "name": "TVB娱乐新闻",
            "httpurl": "p2p://'.$abip.'/57a2d3e00002fc8d165257e925642f7d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 269,
            "name": "民视HD",
            "httpurl": "p2p://'.$abip.'/57a2d2fd000848cf164ee28b57f97380.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 270,
            "name": "台视HD",
            "httpurl": "p2p://'.$abip.'/57a2d2fd000b9def164ee365471b632a.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 271,
            "name": "中视",
            "httpurl": "p2p://'.$abip.'/57a2d339000db969164fce502a237d27.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 272,
            "name": "华视HD",
            "httpurl": "p2p://'.$abip.'/57a2d2fe00028c10164ee4fb77f75b80.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 273,
            "name": "超视",
            "httpurl": "p2p://'.$abip.'/57a2d2fe0005e130164ee5d52cc1583f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 274,
            "name": "中天综合",
            "httpurl": "p2p://'.$abip.'/57a2d2ff0003b682164ee92f12811605.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 275,
            "name": "东森综合",
            "httpurl": "p2p://'.$abip.'/57a2d2fe0008f961164ee6a02424117d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 276,
            "name": "中天娱乐",
            "httpurl": "p2p://'.$abip.'/57a2d338000dfc97164fca7910427316.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 277,
            "name": "TVBS综合",
            "httpurl": "p2p://'.$abip.'/57a2d2ff000d3c03164eeb9f49922c9f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 278,
            "name": "TVBS新闻",
            "httpurl": "p2p://'.$abip.'/57a2d30000014ee3164eec7a76c32894.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 279,
            "name": "TVBS欢乐",
            "httpurl": "p2p://'.$abip.'/57a2d306000c597f164f06bd793f0375.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 280,
            "name": "东森新闻",
            "httpurl": "p2p://'.$abip.'/57a2d30700097800164f09e95c253934.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 281,
            "name": "中天新闻",
            "httpurl": "p2p://'.$abip.'/57a2d2ff00002471164ee8457cc828a4.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 282,
            "name": "非凡新闻",
            "httpurl": "p2p://'.$abip.'/57a2d30700002f6f164f078808f13213.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 283,
            "name": "年代新闻",
            "httpurl": "p2p://'.$abip.'/57a2d2ff000a23d2164eead50c783d7b.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 284,
            "name": "三立新闻",
            "httpurl": "p2p://'.$abip.'/57a2d3070004f230164f08c02f5538f1.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 285,
            "name": "东森电影",
            "httpurl": "p2p://'.$abip.'/57a2d2f1000c62ba164eb4b8561e374d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 286,
            "name": "东森洋片",
            "httpurl": "p2p://'.$abip.'/57a2d2f20002202b164eb5ff7b8d0efa.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 287,
            "name": "HBO",
            "httpurl": "p2p://'.$abip.'/57a2d2f20005385b164eb6ca31dc7ffb.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 288,
            "name": "高清影视HD",
            "httpurl": "p2p://'.$abip.'/57a2d38c0000094916510f07343c3280.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 289,
            "name": "好莱坞电影",
            "httpurl": "p2p://'.$abip.'/57a2d2f2000be29c164eb87f614a1ace.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 290,
            "name": "Discovery",
            "httpurl": "p2p://'.$abip.'/57a2d2f2000efacc164eb94a238254af.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 291,
            "name": "国家地理HD",
            "httpurl": "p2p://'.$abip.'/57a2d34300083e5a164ff3f92be344cb.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 292,
            "name": "东森幼幼",
            "httpurl": "p2p://'.$abip.'/57a2d2fe000c4e81164ee77b15471403.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 293,
            "name": "三立台湾",
            "httpurl": "p2p://'.$abip.'/57a2d310000eb961164f2e694f873751.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 294,
            "name": "三立国际",
            "httpurl": "p2p://'.$abip.'/57a2d31100065e52164f302d06a25b32.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 295,
            "name": "三立都会",
            "httpurl": "p2p://'.$abip.'/57a2d34e00092a5d16501f2d4ed62620.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 296,
            "name": "纬来综合",
            "httpurl": "p2p://'.$abip.'/57a2d30800071062164f0d3358514ec6.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 297,
            "name": "纬来日本",
            "httpurl": "p2p://'.$abip.'/57a2d30900019093164f0fb36a2169c2.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 298,
            "name": "纬来育乐",
            "httpurl": "p2p://'.$abip.'/57a2d32e0001da44164fa04e4ac728c8.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 299,
            "name": "纬来戏剧",
            "httpurl": "p2p://'.$abip.'/57a2d32d000cd3a4164f9f3541583be2.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 300,
            "name": "八大娱乐K台",
            "httpurl": "p2p://'.$abip.'/57a2d3740008b7001650b38062fd54ab.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 301,
            "name": "八大戏剧",
            "httpurl": "p2p://'.$abip.'/57a2d373000d7fff1650b0d1720263ce.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 302,
            "name": "八大第一台",
            "httpurl": "p2p://'.$abip.'/57a2d330000ad969164faa6b0fed6d10.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 303,
            "name": "八大综合",
            "httpurl": "p2p://'.$abip.'/57a2d336000e82f4164fc2cb0e374cfc.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 304,
            "name": "国兴卫视",
            "httpurl": "p2p://'.$abip.'/57a2d31300042d65164f376e4a2349f0.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 305,
            "name": "JET综合",
            "httpurl": "p2p://'.$abip.'/57a2d31200061b23164f3404513e24ca.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 306,
            "name": "Z频道",
            "httpurl": "p2p://'.$abip.'/57a2d3750003ee011650b62e3e697b2b.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 307,
            "name": "民视新闻",
            "httpurl": "p2p://'.$abip.'/57a2d32f000c4d47164fa6e2069728da.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 308,
            "name": "东森戏剧",
            "httpurl": "p2p://'.$abip.'/57a2d35c000beb2616505692553336a8.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 309,
            "name": "东森财经",
            "httpurl": "p2p://'.$abip.'/57a2d32d0009bb73164f9e6a71822883.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 310,
            "name": "DIVA",
            "httpurl": "p2p://'.$abip.'/57a2d35d00035327165058463a930219.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 311,
            "name": "ELTA综合",
            "httpurl": "p2p://'.$abip.'/57a2d26600049675164c93c02a675b0f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 312,
            "name": "三立财经",
            "httpurl": "p2p://'.$abip.'/57a2d3830007659a1650edc1029e12b8.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 313,
            "name": "公视HD",
            "httpurl": "p2p://'.$abip.'/57a2d33700038994164fc3e46728478f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 314,
            "name": "寰宇综合HD",
            "httpurl": "p2p://'.$abip.'/57a2d375000743211650b7096bbc347e.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 315,
            "name": "天映HD",
            "httpurl": "p2p://'.$abip.'/57a2d3d500061c7a16522dbe67342da3.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 316,
            "name": "天映经典",
            "httpurl": "p2p://'.$abip.'/57a2d3d300016636165224b951af6b75.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 317,
            "name": "纬来电影",
            "httpurl": "p2p://'.$abip.'/57a2d307000ccd21164f0ac354c410b4.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 318,
            "name": "龙祥电影",
            "httpurl": "p2p://'.$abip.'/57a2d32e00084795164fa1f3523c2ea6.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 319,
            "name": "卫视电影",
            "httpurl": "p2p://'.$abip.'/57a2d342000dbe29164ff1796fa1402d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 320,
            "name": "美亚电影",
            "httpurl": "p2p://'.$abip.'/57a2d3390006d238164fcc8b1929400b.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 321,
            "name": "星卫电影",
            "httpurl": "p2p://'.$abip.'/57a2d339000a2758164fcd663dd74ea2.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 322,
            "name": "星卫娱乐",
            "httpurl": "p2p://'.$abip.'/57a2d34f0000925e165020e241522fdd.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 323,
            "name": "CineMax",
            "httpurl": "p2p://'.$abip.'/57a2d31200093354164f34cf362772e7.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 324,
            "name": "AXN电影",
            "httpurl": "p2p://'.$abip.'/57a2d31100034621164f2f633af23cd1.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 325,
            "name": "AXN HD",
            "httpurl": "p2p://'.$abip.'/57a2d37500005bf11650b5447a861645.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 326,
            "name": "Sundance HD",
            "httpurl": "p2p://'.$abip.'/57a2d373000a67ce1650b0073fce0d7f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 327,
            "name": "卫视洋片",
            "httpurl": "p2p://'.$abip.'/57a2d2d70008424c164e4e19761c6fe2.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 328,
            "name": "Star World",
            "httpurl": "p2p://'.$abip.'/57a2d32f0008f827164fa6080485721f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 329,
            "name": "Star Movies HD",
            "httpurl": "p2p://'.$abip.'/57a2d34100097b86164fec7a4c0a1440.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 330,
            "name": "HBO家庭",
            "httpurl": "p2p://'.$abip.'/57a2d35c000228b516505412392834de.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 331,
            "name": "HBO原创",
            "httpurl": "p2p://'.$abip.'/57a2d34e0002801c16501d7842771056.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 332,
            "name": "HBO强档",
            "httpurl": "p2p://'.$abip.'/57a2d34d000e6d3c16501c9e608c4011.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 333,
            "name": "FOX家庭",
            "httpurl": "p2p://'.$abip.'/57a2d343000b937a164ff4d326ed4817.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 334,
            "name": "FOX MOVIES HD",
            "httpurl": "p2p://'.$abip.'/57a2d38e00029b1d1651177f66ee2c9d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 335,
            "name": "FOX优质电影",
            "httpurl": "p2p://'.$abip.'/57a2d376000b48d41650bbf87b3a619f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 336,
            "name": "FOX警匪",
            "httpurl": "p2p://'.$abip.'/57a2d350000b056116502777081d7d1a.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 337,
            "name": "FOX",
            "httpurl": "p2p://'.$abip.'/57a2d308000a6582164f0e0d3f1f08b5.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 338,
            "name": "Fx HD",
            "httpurl": "p2p://'.$abip.'/57a2d350000e1d91165028411f8b577c.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 339,
            "name": "龙华洋片",
            "httpurl": "p2p://'.$abip.'/57a2d34f0009610f1650232304a0695e.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 340,
            "name": "龙华动画",
            "httpurl": "p2p://'.$abip.'/57a2d375000db0721650b8ae3fbd7875.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 341,
            "name": "龙华戏剧",
            "httpurl": "p2p://'.$abip.'/57a2d3760004db831650ba530e9f5e27.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 342,
            "name": "ELTA体育",
            "httpurl": "p2p://'.$abip.'/57a2d343000eabaa164ff59e7b2e7b34.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 343,
            "name": "龙华偶像",
            "httpurl": "p2p://'.$abip.'/57a2d3760001c3521650b98824d0544c.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 344,
            "name": "ELTA影剧",
            "httpurl": "p2p://'.$abip.'/57a2d34e0005d53d16501e535ad15293.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 345,
            "name": "靖天电影",
            "httpurl": "p2p://'.$abip.'/57a2d3a40000673316516cdf2a485aed.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 346,
            "name": "壹电视新闻",
            "httpurl": "p2p://'.$abip.'/57a2d3500007b0401650269c194132b6.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 347,
            "name": "壹电视综合",
            "httpurl": "p2p://'.$abip.'/57a2d35000045b20165025c25166616c.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 348,
            "name": "KIX",
            "httpurl": "p2p://'.$abip.'/57a2d3d30005af16165225d27a186aa3.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 349,
            "name": "HKC足球台",
            "httpurl": "p2p://'.$abip.'/57a2d46500075c37165460900efe3fab.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 350,
            "name": "HKC体育台",
            "httpurl": "p2p://'.$abip.'/57a2d465000ab1571654616a247d1f5c.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 351,
            "name": "NBA SD",
            "httpurl": "p2p://'.$abip.'/57a2d3df000ee9ac1652570e2cf80022.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 352,
            "name": "NBA HD",
            "httpurl": "p2p://'.$abip.'/57a2d35c000f03561650575c1a570e62.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 353,
            "name": "skynet sports",
            "httpurl": "p2p://'.$abip.'/57ea7e0b000c9d3e031ef39369203380.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 354,
            "name": "欧洲体育",
            "httpurl": "p2p://'.$abip.'/57a2d33800047716164fc8090bcb232f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 355,
            "name": "高尔夫",
            "httpurl": "p2p://'.$abip.'/57a2d2f40000a60e164ebd6e1d3f6bf8.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 356,
            "name": "欧洲足球",
            "httpurl": "p2p://'.$abip.'/57a2d2f40006d66f164ebf043f5e5821.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 357,
            "name": "Fox Sports-2",
            "httpurl": "p2p://'.$abip.'/57a2d2f3000c932e164ebc94662c49bc.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 358,
            "name": "纬来体育",
            "httpurl": "p2p://'.$abip.'/57a2d2ff0006ceb2164ee9fa1f894988.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 359,
            "name": "中视HD",
            "httpurl": "p2p://'.$abip.'/57a2d2fd000eb61f164ee43052c069f3.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 360,
            "name": "NHK",
            "httpurl": "p2p://'.$abip.'/57a2d2f4000d80b0164ec0b9439a17f5.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 361,
            "name": "BBC",
            "httpurl": "p2p://'.$abip.'/57a2d2fd0004f3ae164ee1b14a6b7273.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 362,
            "name": "CNN",
            "httpurl": "p2p://'.$abip.'/57a2d33000002337164fa7ad5be37fa3.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 363,
            "name": "大爱",
            "httpurl": "p2p://'.$abip.'/57a2d3080000a311164f0b8e02e12167.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 364,
            "name": "好消息",
            "httpurl": "p2p://'.$abip.'/57a2d3080003f832164f0c682e033e48.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 365,
            "name": "Sky News HD",
            "httpurl": "p2p://'.$abip.'/57a2d35b000ac0b41650525d73076ff8.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 366,
            "name": "新视觉HD",
            "httpurl": "p2p://'.$abip.'/57a2d309000877c4164f11770f24250d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 367,
            "name": "ESPN",
            "httpurl": "p2p://'.$abip.'/57a2d2f300097afd164ebbc95ad75ad3.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 368,
            "name": "ASN HD",
            "httpurl": "p2p://'.$abip.'/57a2d341000c93b7164fed4530c752e2.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 369,
            "name": "FOX PLUS HD",
            "httpurl": "p2p://'.$abip.'/57a2d3420003bec7164feeea0a510ae7.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 370,
            "name": "FOX Spoets HD",
            "httpurl": "p2p://'.$abip.'/57a2d34100006fe5164fea29630d36df.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 371,
            "name": "博斯运动",
            "httpurl": "p2p://'.$abip.'/57a2d3120002c603164f332a5cb40d7d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 372,
            "name": "博斯高尔夫",
            "httpurl": "p2p://'.$abip.'/57a2d311000d4582164f31f22cd05217.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 373,
            "name": "高尔夫网球",
            "httpurl": "p2p://'.$abip.'/57a2d3370006a1c4164fc4af67cd287e.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 374,
            "name": "EDGE体育",
            "httpurl": "p2p://'.$abip.'/57a2d38d000b700c165115da7aff3b54.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 375,
            "name": "M HD",
            "httpurl": "p2p://'.$abip.'/57a2d3440002be8b164ff678786635a7.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 376,
            "name": "FASHION TV",
            "httpurl": "p2p://'.$abip.'/57a2d374000192df1650b1ac375a153f.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 377,
            "name": "Li时尚生活",
            "httpurl": "p2p://'.$abip.'/57a2d35b000e15d416505338203f18db.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 378,
            "name": "syfy",
            "httpurl": "p2p://'.$abip.'/57a2d38c000ce3ea165112517fa454e5.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 379,
            "name": "TLC",
            "httpurl": "p2p://'.$abip.'/57a2d35b0007a884165051925a7a7cf6.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 380,
            "name": "卫视中文台",
            "httpurl": "p2p://'.$abip.'/57a2d34e000c7f7d165020073fda4c33.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 381,
            "name": "东风卫视",
            "httpurl": "p2p://'.$abip.'/57a2d35c00089606165055b74a9672f4.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 382,
            "name": "探索科学",
            "httpurl": "p2p://'.$abip.'/57a2d35a00008aa116504bd829844b1e.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 383,
            "name": "美食星球",
            "httpurl": "p2p://'.$abip.'/57a2d35000010600165024e731ee4087.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 384,
            "name": "探索动力",
            "httpurl": "p2p://'.$abip.'/57a2d35a000a102216504e4857513c94.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 385,
            "name": "探索家庭",
            "httpurl": "p2p://'.$abip.'/57a2d35a0006bb0216504d6e69ac3efc.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 386,
            "name": "地理音乐",
            "httpurl": "p2p://'.$abip.'/57a2d35a000d654316504f2274ec69bd.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 387,
            "name": "地理悠人",
            "httpurl": "p2p://'.$abip.'/57a2d34f000cb62f165023fd47e36a20.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 388,
            "name": "野生地理",
            "httpurl": "p2p://'.$abip.'/57a2d33900020f77164fcb5300194dcb.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 389,
            "name": "历史频道",
            "httpurl": "p2p://'.$abip.'/57a2d34300019419164ff244402a521d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 390,
            "name": "AnimalPlanet",
            "httpurl": "p2p://'.$abip.'/57a2d32e000b9cb5164fa2cd26d61f34.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 391,
            "name": "ANIMAX",
            "httpurl": "p2p://'.$abip.'/57a2d374000524ef1650b29661254866.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 392,
            "name": "迪斯尼卡通",
            "httpurl": "p2p://'.$abip.'/57a2d3110009b372164f3108097a4d57.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 393,
            "name": "momo亲子台",
            "httpurl": "p2p://'.$abip.'/57a2d30900055f93164f10ac31fd0691.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 394,
            "name": "CN卡通",
            "httpurl": "p2p://'.$abip.'/57a2d34100047bd6164feb32357c6940.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 395,
            "name": "亚洲旅游",
            "httpurl": "p2p://'.$abip.'/57a2d38f0001273e16511b084ecb6daf.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 396,
            "name": "中天亚洲",
            "httpurl": "p2p://'.$abip.'/57a2d39800088d0f165140152e8a0e96.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 397,
            "name": "DOX印画",
            "httpurl": "p2p://'.$abip.'/57a2d381000b41171650e6ee24da2df3.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 398,
            "name": "DOX影院",
            "httpurl": "p2p://'.$abip.'/57a2d3b40004c6101651ac7e0ec303a0.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 399,
            "name": "中阿卫视",
            "httpurl": "p2p://'.$abip.'/57a2d3990009b7811651444a54da705c.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 400,
            "name": "Cubavision",
            "httpurl": "p2p://'.$abip.'/57a2d3a4000a669416516f6e38ba531a.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 401,
            "name": "GOLF HD",
            "httpurl": "p2p://'.$abip.'/57a2d3d300094127165226bc35441752.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 402,
            "name": "BBC Knowledge",
            "httpurl": "p2p://'.$abip.'/57a2d3a40007117416516e947d462847.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 403,
            "name": "历史频道2",
            "httpurl": "p2p://'.$abip.'/57a2d3a40003427316516d9a383f5461.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 404,
            "name": "Warner TV",
            "httpurl": "p2p://'.$abip.'/57a2d39b000286e416514a42126c0f4c.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 405,
            "name": "Universal HD",
            "httpurl": "p2p://'.$abip.'/57a2d38c0006769a165110ac76886572.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 406,
            "name": "罪案侦缉",
            "httpurl": "p2p://'.$abip.'/57a2d39a00011f82165145fe1fc0250d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 407,
            "name": "EYE旅游",
            "httpurl": "p2p://'.$abip.'/57a2d39a000ae1f31651487e52b86996.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 408,
            "name": "EYE戏剧",
            "httpurl": "p2p://'.$abip.'/57a2d39a000e3713165149585a510cd6.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 409,
            "name": "Outdoor",
            "httpurl": "p2p://'.$abip.'/57a2d39a00078cd2165147a47bbc3403.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 410,
            "name": "MTV",
            "httpurl": "p2p://'.$abip.'/57a2d3820005fe381650e97d79aa7e06.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 411,
            "name": "大爱二台",
            "httpurl": "p2p://'.$abip.'/57a2d3a50008b5c6165172e81b672a59.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 412,
            "name": "好消息1台",
            "httpurl": "p2p://'.$abip.'/57a2d3a5000560a51651720d4d090318.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 413,
            "name": "Skynet SPORTS 1",
            "httpurl": "p2p://'.$abip.'/57a2d466000256481654632f465e27ad.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 414,
            "name": "Skynet SPORTS 2",
            "httpurl": "p2p://'.$abip.'/57a2d4660006623916546438299768bc.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 415,
            "name": "Skynet SPORTS 3",
            "httpurl": "p2p://'.$abip.'/57a2d466000b61e91654658005402c39.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 416,
            "name": "Skynet SPORTS 4",
            "httpurl": "p2p://'.$abip.'/57a2d466000eb70a1654665a6eb73f64.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 417,
            "name": "Skynet SPORTS 5",
            "httpurl": "p2p://'.$abip.'/57a2d467000306da16546744799109a2.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 418,
            "name": "Skynet SPORTS 6",
            "httpurl": "p2p://'.$abip.'/57a2d46700065bfa1654681e32b04189.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 419,
            "name": "Astro Sports HD",
            "httpurl": "p2p://'.$abip.'/57a2d3d3000c9647165227962c9906d0.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 420,
            "name": "Astro Sports 2 HD",
            "httpurl": "p2p://'.$abip.'/57a2d3d40000a927165228703a502e65.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 421,
            "name": "Astro Sports 3 HD",
            "httpurl": "p2p://'.$abip.'/57a2d3d400043b381652295a32d013ab.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 422,
            "name": "Astro Sports 4 HD",
            "httpurl": "p2p://'.$abip.'/57a2d3d40007905816522a3571545856.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 423,
            "name": "Astro全佳",
            "httpurl": "p2p://'.$abip.'/57a2d3e0000651ad165258c32e1c438b.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 424,
            "name": "Astro双星",
            "httpurl": "p2p://'.$abip.'/57a2d3e0000969de1652598e3f565457.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 425,
            "name": "Astro华丽",
            "httpurl": "p2p://'.$abip.'/57a2d45c0000704616543ba208e47c5a.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 426,
            "name": "Astro双喜",
            "httpurl": "p2p://'.$abip.'/57a2d45c00034b8716543c5e1e255e9e.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 427,
            "name": "Astro喜悦",
            "httpurl": "p2p://'.$abip.'/57a2d465000e06781654624512a029ee.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 428,
            "name": "Astro AEC HD",
            "httpurl": "p2p://'.$abip.'/57a2d45c00080e4716543d961c1f2fd1.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 429,
            "name": "TVBS欢乐",
            "httpurl": "p2p://'.$abip.'/57a2d45e000b19fb1654462d534a5d23.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 430,
            "name": "WWE Network HD",
            "httpurl": "p2p://'.$abip.'/57a2d45e0007c4db16544553235332e5.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 431,
            "name": "Oh! K HD",
            "httpurl": "p2p://'.$abip.'/57a2d45e000e322b165446f85005689d.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 432,
            "name": "HITS HD",
            "httpurl": "p2p://'.$abip.'/57a2d45f0002450c165447d21a306f2e.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 433,
            "name": "新加坡5HD",
            "httpurl": "p2p://'.$abip.'/57a2d464000c253616545de25ba71a86.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 434,
            "name": "新加坡8HD",
            "httpurl": "p2p://'.$abip.'/57a2d464000f3d6616545eac0b152170.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 435,
            "name": "新加坡U频道",
            "httpurl": "p2p://'.$abip.'/57a2d4650004071716545fb649e843a4.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "爱播TV",
            "id": 436,
            "name": "FOX HD",
            "httpurl": "p2p://'.$abip.'/57a2d3df00083f6c1652555a1af55851.ts",
            "hotlink": "'.$ablink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 437,
            "name": "TVB翡翠台",
            "httpurl": "p2p://'.$hlip.'/579eff46000e56ab0374211d21820eb1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 438,
            "name": "TVB互动新闻",
            "httpurl": "p2p://'.$hlip.'/579eff470004141c037422653ebe45aa.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 439,
            "name": "TVB J2",
            "httpurl": "p2p://'.$hlip.'/579eff61000059990374870150056028.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 440,
            "name": "TVB J5",
            "httpurl": "p2p://'.$hlip.'/579eff470000820b0374217b2a3343de.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 441,
            "name": "TVB明珠台",
            "httpurl": "p2p://'.$hlip.'/579eff4c00074a05037436bf36863b5e.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 442,
            "name": "Viu TV",
            "httpurl": "p2p://'.$hlip.'/579eff470002a67b0374220708196d4f.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 443,
            "name": "华娱卫视",
            "httpurl": "p2p://'.$hlip.'/579effa10001a54903758156526855fe.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 444,
            "name": "CH313",
            "httpurl": "p2p://'.$hlip.'/579f0023000523ee03777e0b071a0ed8.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 445,
            "name": "TVB古装剧场",
            "httpurl": "p2p://'.$hlip.'/579eff470006ef5c037423205c167023.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 446,
            "name": "TVB经典",
            "httpurl": "p2p://'.$hlip.'/579eff470005beac037422d21d7b52d1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 447,
            "name": "TVB星河",
            "httpurl": "p2p://'.$hlip.'/579eff47000950bc037423bc397f1f6d.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 448,
            "name": "TVB都市剧场",
            "httpurl": "p2p://'.$hlip.'/579eff9a000f257f0375697335365e33.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 449,
            "name": "TVB8",
            "httpurl": "p2p://'.$hlip.'/579eff61000a1c0a03748980210f3c13.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 450,
            "name": "TVB日剧",
            "httpurl": "p2p://'.$hlip.'/579effa10002d5fa037581a415bf263d.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 451,
            "name": "TVB韩剧",
            "httpurl": "p2p://'.$hlip.'/579effa10008129a037582fb2ed66956.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 452,
            "name": "美亚电影港版",
            "httpurl": "p2p://'.$hlip.'/579eff4c0004e8a403743623355d0bff.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 453,
            "name": "高清影视HD",
            "httpurl": "p2p://'.$hlip.'/579eff9b0009e2a003756c0261f83426.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 454,
            "name": "罪案侦缉频道",
            "httpurl": "p2p://'.$hlip.'/579effa1000d8c2b037584624a402404.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 455,
            "name": "靖天电影",
            "httpurl": "p2p://'.$hlip.'/579effa1000ebcdb037584b028b74962.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 456,
            "name": "卫视电影",
            "httpurl": "p2p://'.$hlip.'/579eff6a000b148a0374ace8486b758e.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 457,
            "name": "美亚电影",
            "httpurl": "p2p://'.$hlip.'/579eff69000d7c280374a99d2a801c48.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 458,
            "name": "星卫电影",
            "httpurl": "p2p://'.$hlip.'/579eff69000e6fe90374a9dc1bea3832.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 459,
            "name": "HBO",
            "httpurl": "p2p://'.$hlip.'/579eff480000b8bd03742571660d1368.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 460,
            "name": "HBO家庭HD",
            "httpurl": "p2p://'.$hlip.'/579eff89000a1610037525bf7dac297a.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 461,
            "name": "HBO强档",
            "httpurl": "p2p://'.$hlip.'/579eff6f00066f820374bf3f00283926.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 462,
            "name": "HBO原创",
            "httpurl": "p2p://'.$hlip.'/579eff6f000763420374bf7e74fc5e8e.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 463,
            "name": "CHC高清电影",
            "httpurl": "p2p://'.$hlip.'/579eff4b000bd614037434010ab065c3.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 464,
            "name": "CHC动作电影",
            "httpurl": "p2p://'.$hlip.'/579eff61000b4cba037489ce15075317.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 465,
            "name": "好莱坞电影",
            "httpurl": "p2p://'.$hlip.'/579eff4b000d06c40374344f1b2035dd.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 466,
            "name": "FOX家庭",
            "httpurl": "p2p://'.$hlip.'/579eff6f000357520374be757fc052c2.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 467,
            "name": "FOX优质电影",
            "httpurl": "p2p://'.$hlip.'/579eff9b000113ef037569c13f7955e6.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 468,
            "name": "FOX警匪",
            "httpurl": "p2p://'.$hlip.'/579eff89000016af0375233040800c70.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 469,
            "name": "FOX",
            "httpurl": "p2p://'.$hlip.'/579eff55000f29b503745beb549d2787.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 470,
            "name": "Fx HD",
            "httpurl": "p2p://'.$hlip.'/579eff8900010a6f0375236e648d3644.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 471,
            "name": "CineMax",
            "httpurl": "p2p://'.$hlip.'/579eff5b000910cf037471cc146239d2.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 472,
            "name": "AXN电影",
            "httpurl": "p2p://'.$hlip.'/579eff56000c852703745f2630804a2a.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 473,
            "name": "AXN HD",
            "httpurl": "p2p://'.$hlip.'/579eff93000608a103754bc518973dfa.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 474,
            "name": "Sundance HD",
            "httpurl": "p2p://'.$hlip.'/579eff930000153103754a3f3a954e2f.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 475,
            "name": "卫视洋片",
            "httpurl": "p2p://'.$hlip.'/579eff47000bef0d03742468195e383d.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 476,
            "name": "TVBS综合",
            "httpurl": "p2p://'.$hlip.'/579eff5100044f8d037449845f351a7a.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 477,
            "name": "TVBS新闻",
            "httpurl": "p2p://'.$hlip.'/579eff510005803d037449d2508354b4.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 478,
            "name": "TVBS欢乐",
            "httpurl": "p2p://'.$hlip.'/579eff510006b0ed03744a204ede1ee9.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 479,
            "name": "中视",
            "httpurl": "p2p://'.$hlip.'/579eff6a00005e590374aa2a69485fef.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 480,
            "name": "华视HD",
            "httpurl": "p2p://'.$hlip.'/579eff4c000df44603743874052533df.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 481,
            "name": "民视HD",
            "httpurl": "p2p://'.$hlip.'/579eff4c0009ab650374375b07c21792.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 482,
            "name": "台视HD",
            "httpurl": "p2p://'.$hlip.'/579eff4c000b1905037437b911d77686.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 483,
            "name": "公视HD",
            "httpurl": "p2p://'.$hlip.'/579eff61000334d9037487bc796c1fac.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 484,
            "name": "超视",
            "httpurl": "p2p://'.$hlip.'/579eff50000a862c03744733358f59fb.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 485,
            "name": "东森新闻",
            "httpurl": "p2p://'.$hlip.'/579eff510009c91e03744aeb49b80b03.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 486,
            "name": "东森综合",
            "httpurl": "p2p://'.$hlip.'/579eff50000c30bc037447a07d3c5fe1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 487,
            "name": "东森戏剧",
            "httpurl": "p2p://'.$hlip.'/579eff92000c025003754965191814c3.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 488,
            "name": "东森电影",
            "httpurl": "p2p://'.$hlip.'/579eff47000d5cad037424c55b5a0f5a.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 489,
            "name": "东森洋片",
            "httpurl": "p2p://'.$hlip.'/579eff47000e8d5d03742513443e3890.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 490,
            "name": "东森财经",
            "httpurl": "p2p://'.$hlip.'/579eff5b000d1cc0037472d5044a2a57.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 491,
            "name": "东森幼幼",
            "httpurl": "p2p://'.$hlip.'/579eff50000d616c037447ee303e7998.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 492,
            "name": "壹电视新闻",
            "httpurl": "p2p://'.$hlip.'/579eff88000e652f037522f11d666a52.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 493,
            "name": "壹电视综合",
            "httpurl": "p2p://'.$hlip.'/579eff88000cf78f03752294393a7e85.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 494,
            "name": "三立新闻",
            "httpurl": "p2p://'.$hlip.'/579eff510008986e03744a9d3c2b4900.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 495,
            "name": "三立台湾",
            "httpurl": "p2p://'.$hlip.'/579eff56000b178703745ec94c8e3150.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 496,
            "name": "三立国际",
            "httpurl": "p2p://'.$hlip.'/579eff56000d78e703745f6537e87e8a.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 497,
            "name": "三立都会台",
            "httpurl": "p2p://'.$hlip.'/579eff6f000a3e830374c03924257568.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 498,
            "name": "纬来综合",
            "httpurl": "p2p://'.$hlip.'/579eff55000dbc1503745b8e6dbc6c2f.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 499,
            "name": "纬来日本",
            "httpurl": "p2p://'.$hlip.'/579eff560001920603745c593db10811.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 500,
            "name": "纬来电影",
            "httpurl": "p2p://'.$hlip.'/579eff51000abcde03744b29075b35be.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 501,
            "name": "纬来戏剧",
            "httpurl": "p2p://'.$hlip.'/579eff5b000f0440037473523bf16e1a.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 502,
            "name": "纬来育乐",
            "httpurl": "p2p://'.$hlip.'/579eff5c0000b5c0037473903bd85af9.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 503,
            "name": "纬来体育",
            "httpurl": "p2p://'.$hlip.'/579eff5100022b1d037448f86a827eb8.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 504,
            "name": "八大娱乐K台",
            "httpurl": "p2p://'.$hlip.'/579eff930004212103754b49413c46c5.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 505,
            "name": "八大戏剧",
            "httpurl": "p2p://'.$hlip.'/579eff93000145e103754a8d1ce26f1b.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 506,
            "name": "八大第一台",
            "httpurl": "p2p://'.$hlip.'/579eff6100014d590374873f4b1f272a.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 507,
            "name": "八大综合",
            "httpurl": "p2p://'.$hlip.'/579eff61000241190374877d05b909c6.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 508,
            "name": "ELTA综合",
            "httpurl": "p2p://'.$hlip.'/579eff3e0008d21c03740074542e43ab.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 509,
            "name": "ELTA影剧",
            "httpurl": "p2p://'.$hlip.'/579eff6f00090dd20374bfeb1f142ea1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 510,
            "name": "ELTA体育台",
            "httpurl": "p2p://'.$hlip.'/579eff6f000488020374bec302e705a8.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 511,
            "name": "龙华电影",
            "httpurl": "p2p://'.$hlip.'/579eff9b000d37c003756cdc63af44da.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 512,
            "name": "龙华洋片",
            "httpurl": "p2p://'.$hlip.'/579eff6f000e4a730374c142024472e1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 513,
            "name": "龙华动画",
            "httpurl": "p2p://'.$hlip.'/579eff9300095dc203754ca05fff0ca0.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 514,
            "name": "龙华戏剧",
            "httpurl": "p2p://'.$hlip.'/579eff93000c390203754d5b46480503.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 515,
            "name": "龙华偶像",
            "httpurl": "p2p://'.$hlip.'/579eff93000acb6203754cfd04d6771f.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 516,
            "name": "中天新闻",
            "httpurl": "p2p://'.$hlip.'/579eff50000ecf0d0374484c35667732.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 517,
            "name": "中天综合",
            "httpurl": "p2p://'.$hlip.'/579eff510001375d037448b9013e5014.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 518,
            "name": "中天娱乐",
            "httpurl": "p2p://'.$hlip.'/579eff61000c407a03748a0d67606b79.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 519,
            "name": "非凡新闻",
            "httpurl": "p2p://'.$hlip.'/579eff510007a4ae03744a5e576166f6.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 520,
            "name": "年代新闻",
            "httpurl": "p2p://'.$hlip.'/579eff5100035bcd0374494623f96733.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 521,
            "name": "民视新闻",
            "httpurl": "p2p://'.$hlip.'/579eff60000db45903748684341a1002.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 522,
            "name": "JET综合",
            "httpurl": "p2p://'.$hlip.'/579eff5b0007e01f0374717e04800028.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 523,
            "name": "寰宇综合",
            "httpurl": "p2p://'.$hlip.'/579eff930006fc6103754c044b3c2972.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 524,
            "name": "国兴卫视",
            "httpurl": "p2p://'.$hlip.'/579eff5b000bec10037472873a85155f.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 525,
            "name": "Z 频道",
            "httpurl": "p2p://'.$hlip.'/579eff6f00057bc20374bf013fa74734.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 526,
            "name": "AnimalPlanet",
            "httpurl": "p2p://'.$hlip.'/579eff5c0003cdf00374745b6e7b62c7.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 527,
            "name": "momo亲子台",
            "httpurl": "p2p://'.$hlip.'/579eff56000285c603745c97241b7407.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 528,
            "name": "CN卡通 HD",
            "httpurl": "p2p://'.$hlip.'/579eff6a0003f0690374ab142a265627.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 529,
            "name": "迪斯尼卡通",
            "httpurl": "p2p://'.$hlip.'/579eff56000e6ca703745fa325b23360.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 530,
            "name": "ANIMAX",
            "httpurl": "p2p://'.$hlip.'/579eff9300032d6103754b0a2e035690.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 531,
            "name": "大爱",
            "httpurl": "p2p://'.$hlip.'/579eff51000bb09e03744b6859134000.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 532,
            "name": "好消息",
            "httpurl": "p2p://'.$hlip.'/579eff55000c8b6503745b402d6f71d3.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 533,
            "name": "Sky News HD",
            "httpurl": "p2p://'.$hlip.'/579eff8900082e900375254202fd4ceb.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 534,
            "name": "CNN",
            "httpurl": "p2p://'.$hlip.'/579eff60000ea819037486c20a2c4c8b.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 535,
            "name": "BBC",
            "httpurl": "p2p://'.$hlip.'/579eff4c00083dc5037436fe72115c10.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 536,
            "name": "BBC Knowledge Channel",
            "httpurl": "p2p://'.$hlip.'/579effa10008c96a0375832a0ccd56d8.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 537,
            "name": "橄榄球频道",
            "httpurl": "p2p://'.$hlip.'/579eff4c000cc3950374382662c81ce1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 538,
            "name": "CNBC",
            "httpurl": "p2p://'.$hlip.'/579eff6f000132e20374bde849172bea.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 539,
            "name": "ASN HD",
            "httpurl": "p2p://'.$hlip.'/579eff6a000614d90374aba000af1bd2.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 540,
            "name": "NBA HD",
            "httpurl": "p2p://'.$hlip.'/579eff92000d6ff0037549c33ea0460c.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 541,
            "name": "NBA北美",
            "httpurl": "p2p://'.$hlip.'/579f0032000a02e90377b9e32507659d.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 542,
            "name": "NHK",
            "httpurl": "p2p://'.$hlip.'/579eff4c0005dc650374366232604fc8.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 543,
            "name": "KBS",
            "httpurl": "p2p://'.$hlip.'/579eff5c0004fea1037474a966560f67.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 544,
            "name": "DIVA",
            "httpurl": "p2p://'.$hlip.'/579eff92000e63b103754a01357b65d8.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 545,
            "name": "高尔夫 HD",
            "httpurl": "p2p://'.$hlip.'/579eff6a000708990374abdf7d5e25b1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 546,
            "name": "足球HD",
            "httpurl": "p2p://'.$hlip.'/579eff4c0003b7f4037435d536cd17d2.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 547,
            "name": "EDGE体育",
            "httpurl": "p2p://'.$hlip.'/579eff9b000f1f4003756d59003e7e41.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 548,
            "name": "FOX Spoets HD",
            "httpurl": "p2p://'.$hlip.'/579eff6a0002fca90374aad574ae7a65.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 549,
            "name": "卫视体育",
            "httpurl": "p2p://'.$hlip.'/579eff4c000156940374353901fe357b.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 550,
            "name": "FOX PLUS HD",
            "httpurl": "p2p://'.$hlip.'/579eff6a0008394a0374ac2d042733a3.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 551,
            "name": "欧洲体育",
            "httpurl": "p2p://'.$hlip.'/579eff610009284a037489421885059e.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 552,
            "name": "欧洲足球",
            "httpurl": "p2p://'.$hlip.'/579effa10009fa1a037583786afa39a5.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 553,
            "name": "高尔夫",
            "httpurl": "p2p://'.$hlip.'/579eff4c000287440374358712897657.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 554,
            "name": "新视觉HD",
            "httpurl": "p2p://'.$hlip.'/579eff560003b67603745ce51fe12a67.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 555,
            "name": "高尔夫网球",
            "httpurl": "p2p://'.$hlip.'/579eff6100042899037487fa6b815673.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 556,
            "name": "博斯运动",
            "httpurl": "p2p://'.$hlip.'/579eff5b0006ec5f0374713f712d686c.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 557,
            "name": "博斯高尔夫",
            "httpurl": "p2p://'.$hlip.'/579eff5b00057ebf037470e254532147.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 558,
            "name": "国家地理HD",
            "httpurl": "p2p://'.$hlip.'/579eff6f000263920374be366e244e37.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 559,
            "name": "国家地理音乐",
            "httpurl": "p2p://'.$hlip.'/579eff8900051660037524770b43722e.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 560,
            "name": "地理悠人",
            "httpurl": "p2p://'.$hlip.'/579eff6f000f3e330374c1811a75245b.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 561,
            "name": "野生地理",
            "httpurl": "p2p://'.$hlip.'/579eff69000c4b780374a94f107e7d15.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 562,
            "name": "Discovery",
            "httpurl": "p2p://'.$hlip.'/579eff4b000e37740374349d2b950069.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 563,
            "name": "探索科学",
            "httpurl": "p2p://'.$hlip.'/579eff890001fe2f037523ac01700b20.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 564,
            "name": "探索动力",
            "httpurl": "p2p://'.$hlip.'/579eff89000422a003752439285c3cb7.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 565,
            "name": "探索家庭",
            "httpurl": "p2p://'.$hlip.'/579eff8900032edf037523fa2e7d72d1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 566,
            "name": "Star World",
            "httpurl": "p2p://'.$hlip.'/579eff60000ad918037485c959ec7970.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 567,
            "name": "Universal Channel",
            "httpurl": "p2p://'.$hlip.'/579effa1000aedda037583b677a91499.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 568,
            "name": "Warner TV",
            "httpurl": "p2p://'.$hlip.'/579effa1000c5b7b037584143b5b2b38.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 569,
            "name": "Channel V HD",
            "httpurl": "p2p://'.$hlip.'/579eff930007f02203754c4205136a66.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 570,
            "name": "韩国娱乐MHD",
            "httpurl": "p2p://'.$hlip.'/579eff9b00051fdf03756aca45fc019f.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 571,
            "name": "MTV Live",
            "httpurl": "p2p://'.$hlip.'/579effa200006e5b037584ee0fa17a00.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 572,
            "name": "FASHION TV",
            "httpurl": "p2p://'.$hlip.'/579eff93000239a103754acc706430f1.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 573,
            "name": "历史频道",
            "httpurl": "p2p://'.$hlip.'/579eff6a000c822a0374ad4528d663b3.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 574,
            "name": "HISTORY 2",
            "httpurl": "p2p://'.$hlip.'/579effa20001621b0375852d5a5c4423.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 575,
            "name": "Li时尚生活D",
            "httpurl": "p2p://'.$hlip.'/579eff8900092250037525807c17006c.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 576,
            "name": "FOX MOVIES",
            "httpurl": "p2p://'.$hlip.'/579eff9c0002017103756de536dd0a3f.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 577,
            "name": "TLC",
            "httpurl": "p2p://'.$hlip.'/579eff8900073ad00375250434705b59.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 578,
            "name": "亚洲旅游",
            "httpurl": "p2p://'.$hlip.'/579effa10004bd7a0375822107c5723d.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 579,
            "name": "EYE旅游",
            "httpurl": "p2p://'.$hlip.'/579effa6000de6d40375980153dc04d3.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 580,
            "name": "Outdoor",
            "httpurl": "p2p://'.$hlip.'/579effa7000012340375985f47987e01.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 581,
            "name": "卫视中文台",
            "httpurl": "p2p://'.$hlip.'/579eff6f000b32430374c0775f423305.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 582,
            "name": "东风卫视",
            "httpurl": "p2p://'.$hlip.'/579eff89000cf1510375267a1e651301.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 583,
            "name": "美食星球",
            "httpurl": "p2p://'.$hlip.'/579eff7000012ca30374c1cf5abb2891.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 584,
            "name": "凤凰中文",
            "httpurl": "p2p://'.$hlip.'/579eff3f0008cbde0374045a7c8b460e.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 585,
            "name": "凤凰资讯",
            "httpurl": "p2p://'.$hlip.'/579eff3f000a397e037404b819d219c7.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 586,
            "name": "凤凰香港",
            "httpurl": "p2p://'.$hlip.'/579eff46000b018b03742043411a3f30.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 587,
            "name": "莲花卫视",
            "httpurl": "p2p://'.$hlip.'/579eff3f000b6a2e0374050654774439.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 588,
            "name": "中阿卫视",
            "httpurl": "p2p://'.$hlip.'/579effa70007365503759a3336737d57.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 589,
            "name": "深圳公共",
            "httpurl": "p2p://'.$hlip.'/579eff46000ce90b037420c03296161f.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "葫芦TV",
            "id": 590,
            "name": "深圳都市",
            "httpurl": "p2p://'.$hlip.'/579eff8900060a20037524b61cdb0c73.ts",
            "hotlink": "'.$hllink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 591,
            "name": "TVB翡翠台",
            "httpurl": "p2p://'.$dbip.'/579f3366000cdfe6a8ce7cb142c61fad.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 592,
            "name": "TVB互动新闻",
            "httpurl": "p2p://'.$dbip.'/579f33670009c671a8ce7fce0f9e7db2.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 593,
            "name": "TVB J2",
            "httpurl": "p2p://'.$dbip.'/579f33a70007a120a8cf794233396d8d.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 594,
            "name": "TVB J5",
            "httpurl": "p2p://'.$dbip.'/579f336700003d09a8ce7d5d66e34801.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 595,
            "name": "TVB娱乐新闻",
            "httpurl": "p2p://'.$dbip.'/579f3434000b71b0a8d1a1046f50066b.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 596,
            "name": "TVBJ",
            "httpurl": "p2p://'.$dbip.'/579f34f600089544a8d496180c8d7d33.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 597,
            "name": "TVB经典",
            "httpurl": "p2p://'.$dbip.'/579f3367000c65d4a8ce807a255e1912.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 598,
            "name": "TVB星河",
            "httpurl": "p2p://'.$dbip.'/579f33680001e848a8ce81b3092b5d40.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 599,
            "name": "TVB体育",
            "httpurl": "p2p://'.$dbip.'/579f33fc0000f424a8d0c394715b7f23.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 600,
            "name": "TVB8",
            "httpurl": "p2p://'.$dbip.'/58009c34000d9e74aa432a390fb03a64.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 601,
            "name": "TVB日剧",
            "httpurl": "p2p://'.$dbip.'/579f34170007270ea8d12ea2450d3c03.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 602,
            "name": "TVB韩剧",
            "httpurl": "p2p://'.$dbip.'/579f34180002625aa8d1315210317eca.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 603,
            "name": "CHC高清电影",
            "httpurl": "p2p://'.$dbip.'/579f3377000aba95a8cebe8d4d16336b.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 604,
            "name": "CHC动作电影",
            "httpurl": "p2p://'.$dbip.'/579f3409000a7d8ca8d0f8cd45501796.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 605,
            "name": "靖天电影",
            "httpurl": "p2p://'.$dbip.'/579f34290001312da8d1736c74ef46db.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 606,
            "name": "卫视中文电影",
            "httpurl": "p2p://'.$dbip.'/579f33680006ea05a8ce82fb151417bb.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 607,
            "name": "美亚电影",
            "httpurl": "p2p://'.$dbip.'/579f33af00089544a8cf98c07b7d3a48.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 608,
            "name": "星卫电影",
            "httpurl": "p2p://'.$dbip.'/579f33af000aba95a8cf994d11ec7a73.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 609,
            "name": "卫视中文台",
            "httpurl": "p2p://'.$dbip.'/579f33c8000c65d4a8cffb62783f738b.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 610,
            "name": "凤凰中文",
            "httpurl": "p2p://'.$dbip.'/579f33580002625aa8ce4352176869ea.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 611,
            "name": "凤凰资讯",
            "httpurl": "p2p://'.$dbip.'/579f33660000f424a8ce79a46ea40e15.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 612,
            "name": "凤凰香港",
            "httpurl": "p2p://'.$dbip.'/579f3366000632eaa8ce7afc3c394c37.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 613,
            "name": "ATV World HD",
            "httpurl": "p2p://'.$dbip.'/579f33de0008d24da8d050680c7d4136.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 614,
            "name": "NOW TV",
            "httpurl": "p2p://'.$dbip.'/579f35050003d090a8d4cf7822c917c8.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 615,
            "name": "TVB明珠台",
            "httpurl": "p2p://'.$dbip.'/579f338500094c5fa8cef4df33b57c1c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 616,
            "name": "高清亚洲台",
            "httpurl": "p2p://'.$dbip.'/579f33670007a120a8ce7f422ce11418.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 617,
            "name": "岁月留声",
            "httpurl": "p2p://'.$dbip.'/579f341700057bcfa8d12e35287e3269.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 618,
            "name": "莲花卫视",
            "httpurl": "p2p://'.$dbip.'/579f3366000501bda8ce7aae03770070.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 619,
            "name": "TVBS综合",
            "httpurl": "p2p://'.$dbip.'/579f338800053ec6a8ceff8d3fab521d.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 620,
            "name": "TVBS新闻",
            "httpurl": "p2p://'.$dbip.'/579f33910008583ba8cf23814bcc0ae3.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 621,
            "name": "TVBS欢乐",
            "httpurl": "p2p://'.$dbip.'/579f3391000ca2dda8cf249a546951a5.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 622,
            "name": "中视",
            "httpurl": "p2p://'.$dbip.'/579f33af000bebc2a8cf999b095c1697.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 623,
            "name": "华视HD",
            "httpurl": "p2p://'.$dbip.'/579f3386000e1113a8cefa00655a1271.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 624,
            "name": "民视HD",
            "httpurl": "p2p://'.$dbip.'/579f3385000ca2dda8cef5ba5d193534.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 625,
            "name": "台视HD",
            "httpurl": "p2p://'.$dbip.'/579f338600000000a8cef666462a3c2c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 626,
            "name": "公视HD",
            "httpurl": "p2p://'.$dbip.'/579f33ae000501bda8cf93ee2a315f36.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 627,
            "name": "超视",
            "httpurl": "p2p://'.$dbip.'/579f338700057bcfa8cefbb56cbe5b28.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 628,
            "name": "东森新闻",
            "httpurl": "p2p://'.$dbip.'/579f33920007270ea8cf271a16e9122c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 629,
            "name": "东森综合",
            "httpurl": "p2p://'.$dbip.'/579f33870008583ba8cefc7104d117d9.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 630,
            "name": "东森戏剧",
            "httpurl": "p2p://'.$dbip.'/579f33df0006ea05a8d053d35ef64c18.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 631,
            "name": "东森电影",
            "httpurl": "p2p://'.$dbip.'/579f337700031975a8cebc9947595f2e.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 632,
            "name": "东森洋片",
            "httpurl": "p2p://'.$dbip.'/579f3377000487aba8cebcf774b76c56.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 633,
            "name": "东森财经",
            "httpurl": "p2p://'.$dbip.'/579f33a50008583ba8cf71a101147c06.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 634,
            "name": "东森幼幼",
            "httpurl": "p2p://'.$dbip.'/579f3387000a037aa8cefcde70920f38.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 635,
            "name": "壹电视新闻",
            "httpurl": "p2p://'.$dbip.'/579f33c9000a4083a8cffebe6ed16a21.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 636,
            "name": "壹电视综合",
            "httpurl": "p2p://'.$dbip.'/579f33c90008d24da8cffe6068124732.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 637,
            "name": "三立新闻",
            "httpurl": "p2p://'.$dbip.'/579f339200044aa2a8cf265f6fc61139.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 638,
            "name": "三立台湾",
            "httpurl": "p2p://'.$dbip.'/579f339a0005b8d8a8cf45fd39e532e6.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 639,
            "name": "三立国际",
            "httpurl": "p2p://'.$dbip.'/579f339a00090f56a8cf46d71cc24ebb.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 640,
            "name": "三立都会",
            "httpurl": "p2p://'.$dbip.'/579f33c8000af79ea8cffb0409b509fe.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 641,
            "name": "纬来综合",
            "httpurl": "p2p://'.$dbip.'/579f339300057bcfa8cf2a953a303769.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 642,
            "name": "纬来日本",
            "httpurl": "p2p://'.$dbip.'/579f339400007a12a8cf2d351cb72871.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 643,
            "name": "纬来电影",
            "httpurl": "p2p://'.$dbip.'/579f3392000a4083a8cf27e610b44a62.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 644,
            "name": "纬来戏剧",
            "httpurl": "p2p://'.$dbip.'/579f33a5000e1113a8cf731850d60160.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 645,
            "name": "纬来育乐",
            "httpurl": "p2p://'.$dbip.'/579f33a600039387a8cf7450769b0ef4.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 646,
            "name": "纬来体育",
            "httpurl": "p2p://'.$dbip.'/579f338800003d09a8cefe4535ee5701.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 647,
            "name": "八大娱乐K台",
            "httpurl": "p2p://'.$dbip.'/579f33fa000e4e1ca8d0bf2f42ed658c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 648,
            "name": "八大戏剧",
            "httpurl": "p2p://'.$dbip.'/579f33fa00081b32a8d0bd993cf9420d.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 649,
            "name": "八大第一台",
            "httpurl": "p2p://'.$dbip.'/579f33ae00007a12a8cf92c52d8e0383.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 650,
            "name": "八大综合",
            "httpurl": "p2p://'.$dbip.'/579f33ae0000f424a8cf92e431985a5c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 651,
            "name": "ELTA综合",
            "httpurl": "p2p://'.$dbip.'/579f3356000632eaa8ce3c7c423a14d8.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 652,
            "name": "ELTA影剧",
            "httpurl": "p2p://'.$dbip.'/579f33c800094c5fa8cffa9723ef47a9.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 653,
            "name": "ELTA体育",
            "httpurl": "p2p://'.$dbip.'/579f33ba000e1113a8cfc52054ce00db.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 654,
            "name": "龙华电影",
            "httpurl": "p2p://'.$dbip.'/579f3416000a037aa8d12b760ea477ef.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 655,
            "name": "龙华洋片",
            "httpurl": "p2p://'.$dbip.'/579f33c900029f63a8cffcca21f4494f.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 656,
            "name": "龙华动画",
            "httpurl": "p2p://'.$dbip.'/579f33fb000af79ea8d0c23c0cf14cc7.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 657,
            "name": "龙华戏剧",
            "httpurl": "p2p://'.$dbip.'/579f33fb000e8b25a8d0c32776ca2aa6.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 658,
            "name": "龙华偶像",
            "httpurl": "p2p://'.$dbip.'/579f33fb000ca2dda8d0c2aa60ae4d5b.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 659,
            "name": "中天新闻",
            "httpurl": "p2p://'.$dbip.'/579f3387000bebc2a8cefd5b62423339.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 660,
            "name": "中天综合",
            "httpurl": "p2p://'.$dbip.'/579f3387000dd40aa8cefdd8123e033f.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 661,
            "name": "中天娱乐",
            "httpurl": "p2p://'.$dbip.'/579f33af0005b8d8a8cf98053ae70a24.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 662,
            "name": "非凡新闻",
            "httpurl": "p2p://'.$dbip.'/579f33920000b71ba8cf2575495f2c31.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 663,
            "name": "年代新闻",
            "httpurl": "p2p://'.$dbip.'/579f338800039387a8ceff2051406274.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 664,
            "name": "民视新闻",
            "httpurl": "p2p://'.$dbip.'/579f33a700040d99a8cf78573e404198.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 665,
            "name": "JET综合",
            "httpurl": "p2p://'.$dbip.'/579f339b00003d09a8cf487d3bf31613.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 666,
            "name": "HBO",
            "httpurl": "p2p://'.$dbip.'/579f33770007270ea8cebda278996f44.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 667,
            "name": "HBO家庭",
            "httpurl": "p2p://'.$dbip.'/579f33df00016e36a8d0526b31580eb5.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 668,
            "name": "HBO强档",
            "httpurl": "p2p://'.$dbip.'/579f33c800040d99a8cff93f356148da.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 669,
            "name": "HBO原创",
            "httpurl": "p2p://'.$dbip.'/579f33c8000632eaa8cff9cc2c05796d.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 670,
            "name": "FOX家庭",
            "httpurl": "p2p://'.$dbip.'/579f33ba000baeb9a8cfc48348320426.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 671,
            "name": "FOX优质电影",
            "httpurl": "p2p://'.$dbip.'/579f340700016e36a8d0eeab5aaf0c6f.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 672,
            "name": "FOX警匪",
            "httpurl": "p2p://'.$dbip.'/579f33c9000c28cba8cfff3b2c8421d4.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 673,
            "name": "FOX",
            "httpurl": "p2p://'.$dbip.'/579f33930008d24da8cf2b7032db2b7a.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 674,
            "name": "Fx HD",
            "httpurl": "p2p://'.$dbip.'/579f33dd000bebc2a8d04d4b0c352d1d.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 675,
            "name": "CineMax",
            "httpurl": "p2p://'.$dbip.'/579f339b0003567ea8cf4948133b6401.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 676,
            "name": "AXN电影",
            "httpurl": "p2p://'.$dbip.'/579f339a00076417a8cf466a72091616.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 677,
            "name": "AXN HD",
            "httpurl": "p2p://'.$dbip.'/579f33fb00029f63a8d0c01a24056d8a.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 678,
            "name": "Sundance HD",
            "httpurl": "p2p://'.$dbip.'/579f33fa0002dc6ca8d0bc4140dd3692.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 679,
            "name": "Star Movies HD",
            "httpurl": "p2p://'.$dbip.'/579f33b90007de29a8cfbfa1414f4161.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 680,
            "name": "国家地理",
            "httpurl": "p2p://'.$dbip.'/579f33ba000a4083a8cfc4264ba87698.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 681,
            "name": "国家地理音乐",
            "httpurl": "p2p://'.$dbip.'/579f33de0005f5e1a8d04fac1c5e5b67.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 682,
            "name": "地理悠人",
            "httpurl": "p2p://'.$dbip.'/579f33c900044aa2a8cffd370a02069d.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 683,
            "name": "野生地理",
            "httpurl": "p2p://'.$dbip.'/579f33af00076417a8cf987209aa7bd2.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 684,
            "name": "Discovery",
            "httpurl": "p2p://'.$dbip.'/579f3377000d59f8a8cebf397e8c3e3c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 685,
            "name": "探索科学",
            "httpurl": "p2p://'.$dbip.'/579f33dd000d9701a8d04db8520039c8.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 686,
            "name": "探索动力",
            "httpurl": "p2p://'.$dbip.'/579f33de000501bda8d04f6e430e331d.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 687,
            "name": "探索家庭",
            "httpurl": "p2p://'.$dbip.'/579f33de0002dc6ca8d04ee1408d01d8.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 688,
            "name": "Discovery kids",
            "httpurl": "p2p://'.$dbip.'/579f35050001ab3fa8d4ceeb3a0e3edc.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 689,
            "name": "Star World",
            "httpurl": "p2p://'.$dbip.'/579f33a700029f63a8cf77fa0e1554f7.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 690,
            "name": "Universal Channel",
            "httpurl": "p2p://'.$dbip.'/579f3428000aba95a8d171f5574c0030.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 691,
            "name": "Warner TV",
            "httpurl": "p2p://'.$dbip.'/579f3428000ca2dda8d17272395c59b5.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 692,
            "name": "罪案侦缉频道",
            "httpurl": "p2p://'.$dbip.'/579f3428000e1113a8d172d05d670595.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 693,
            "name": "寰宇综合",
            "httpurl": "p2p://'.$dbip.'/579f33fb000632eaa8d0c104136b645b.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 694,
            "name": "国兴卫视",
            "httpurl": "p2p://'.$dbip.'/579f33a50006acfca8cf71334cc41a67.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 695,
            "name": "Z频道",
            "httpurl": "p2p://'.$dbip.'/579f33fb000487aba8d0c0971d9004ae.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 696,
            "name": "AnimalPlanet",
            "httpurl": "p2p://'.$dbip.'/579f33a60008d24da8cf75a810d305e3.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 697,
            "name": "momo亲子台",
            "httpurl": "p2p://'.$dbip.'/579f339400044aa2a8cf2e2f7e137bef.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 698,
            "name": "CN卡通",
            "httpurl": "p2p://'.$dbip.'/579f33b9000632eaa8cfbf342fa6589c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 699,
            "name": "迪斯尼卡通",
            "httpurl": "p2p://'.$dbip.'/58009c250008bf79aa42ee624e03173c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 700,
            "name": "ANIMAX",
            "httpurl": "p2p://'.$dbip.'/579f33fa000baeb9a8d0be8351df3419.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 701,
            "name": "大爱",
            "httpurl": "p2p://'.$dbip.'/579f3392000e4e1ca8cf28ef514e48e1.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 702,
            "name": "好消息",
            "httpurl": "p2p://'.$dbip.'/579f339300022551a8cf29ba155768fc.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 703,
            "name": "东风卫视",
            "httpurl": "p2p://'.$dbip.'/579f33df00053ec6a8d0536520cb7a55.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 704,
            "name": "Channel V HD",
            "httpurl": "p2p://'.$dbip.'/579f33fb00089544a8d0c1a027361f77.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 705,
            "name": "M HD",
            "httpurl": "p2p://'.$dbip.'/579f33c80001312da8cff8842df7130c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 706,
            "name": "MTV Live",
            "httpurl": "p2p://'.$dbip.'/579f342900029f63a8d173ca1ae62abf.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 707,
            "name": "FASHION TV",
            "httpurl": "p2p://'.$dbip.'/579f33fa000a4083a8d0be2670ce36ae.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 708,
            "name": "美食星球",
            "httpurl": "p2p://'.$dbip.'/579f33c90007270ea8cffdf2446a068e.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 709,
            "name": "历史频道",
            "httpurl": "p2p://'.$dbip.'/579f33ba00066ff3a8cfc32c532b66d4.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 710,
            "name": "HISTORY 2",
            "httpurl": "p2p://'.$dbip.'/579f3429000487aba8d174470bf60b23.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 711,
            "name": "Li时尚生活",
            "httpurl": "p2p://'.$dbip.'/579f33de000e1113a8d051c021b424f4.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 712,
            "name": "FOX娱乐",
            "httpurl": "p2p://'.$dbip.'/579f33fb0000f424a8d0bfac52182862.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 713,
            "name": "TLC",
            "httpurl": "p2p://'.$dbip.'/579f33de000b71b0a8d05114763541d5.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 714,
            "name": "亚洲旅游",
            "httpurl": "p2p://'.$dbip.'/579f3417000a4083a8d12f6e76606b80.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 715,
            "name": "EYE旅游",
            "httpurl": "p2p://'.$dbip.'/579f34290006acfca8d174d3390b0dfe.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 716,
            "name": "Outdoor",
            "httpurl": "p2p://'.$dbip.'/579f342900094c5fa8d1757f73573bdb.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 717,
            "name": "Sky News",
            "httpurl": "p2p://'.$dbip.'/579f33de000ca2dda8d051623d400bf6.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 718,
            "name": "CNN",
            "httpurl": "p2p://'.$dbip.'/579f33a70005b8d8a8cf78c53ce7402d.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 719,
            "name": "BBC",
            "httpurl": "p2p://'.$dbip.'/579f3385000a7d8ca8cef52d55710fef.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 720,
            "name": "BBC Knowledge Channel",
            "httpurl": "p2p://'.$dbip.'/579f34180005f5e1a8d1323c5b67448e.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 721,
            "name": "CNBC",
            "httpurl": "p2p://'.$dbip.'/579f33ba0007de29a8cfc3890fbe3cfa.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 722,
            "name": "ASN HD",
            "httpurl": "p2p://'.$dbip.'/579f33b90008d24da8cfbfe01fec793f.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 723,
            "name": "NBA HD",
            "httpurl": "p2p://'.$dbip.'/579f33df000a037aa8d0549e59ef095c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 724,
            "name": "NHK",
            "httpurl": "p2p://'.$dbip.'/579f338500089544a8cef4b05e2c1e20.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 725,
            "name": "KBS",
            "httpurl": "p2p://'.$dbip.'/579f3407000a7d8ca8d0f0fd7a587a72.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 726,
            "name": "DIVA",
            "httpurl": "p2p://'.$dbip.'/579f33fa0000f424a8d0bbc411c14eff.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 727,
            "name": "Golf 亚洲",
            "httpurl": "p2p://'.$dbip.'/579f3484000c28cba8d2d9b36c177a7f.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 728,
            "name": "SKY体育",
            "httpurl": "p2p://'.$dbip.'/579f345b00000000a8d2366e4c8d0670.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 729,
            "name": "EDGE体育",
            "httpurl": "p2p://'.$dbip.'/579f3416000d9701a8d12c607c34486c.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 730,
            "name": "FOX Spoets HD",
            "httpurl": "p2p://'.$dbip.'/579f33b900040d99a8cfbea767bc1b47.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 731,
            "name": "卫视体育",
            "httpurl": "p2p://'.$dbip.'/579f3378000baeb9a8cec2b3757e2f54.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 732,
            "name": "FOX PLUS HD",
            "httpurl": "p2p://'.$dbip.'/579f33b9000e4e1ca8cfc14720a24b0a.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 733,
            "name": "France24",
            "httpurl": "p2p://'.$dbip.'/579f339b00098968a8cf4adf295f5083.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 734,
            "name": "TV5",
            "httpurl": "p2p://'.$dbip.'/579f339b0005f5e1a8cf49f46c2b6865.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 735,
            "name": "Bloomberg",
            "httpurl": "p2p://'.$dbip.'/579f340900000000a8d0f61e64344c28.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 736,
            "name": "欧洲体育",
            "httpurl": "p2p://'.$dbip.'/579f33ae000d9701a8cf96204e237a39.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 737,
            "name": "欧洲足球",
            "httpurl": "p2p://'.$dbip.'/579f34180007de29a8d132b95ab20f51.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 738,
            "name": "高尔夫 HD",
            "httpurl": "p2p://'.$dbip.'/579f33b9000af79ea8cfc06c09cf72f2.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 739,
            "name": "新视觉HD",
            "httpurl": "p2p://'.$dbip.'/579f3394000632eaa8cf2eac62274d09.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 740,
            "name": "高尔夫网球",
            "httpurl": "p2p://'.$dbip.'/579f33ae0006acfca8cf945b44d16e75.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 741,
            "name": "博斯运动",
            "httpurl": "p2p://'.$dbip.'/579f339a000dd40aa8cf48104c462b5a.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "丽宝TV",
            "id": 742,
            "name": "博斯高尔夫",
            "httpurl": "p2p://'.$dbip.'/579f339a000c65d4a8cf47b2756133d1.ts",
            "hotlink": "'.$dblink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 743,
            "name": "TVB翡翠台",
            "httpurl": "p2p://'.$ngip.'/579f030b0004814f037e5b1154910587.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 744,
            "name": "TVB互动新闻",
            "httpurl": "p2p://'.$ngip.'/579f030b000a37d0037e5c8846e264bf.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 745,
            "name": "TVB J2",
            "httpurl": "p2p://'.$ngip.'/579f033800058cce037f0b1e0c373262.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 746,
            "name": "TVB J5",
            "httpurl": "p2p://'.$ngip.'/579f030b000668cf037e5b8e455a3d48.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 747,
            "name": "TVB明珠台",
            "httpurl": "p2p://'.$ngip.'/579f031700024ee4037e896103c769c4.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 748,
            "name": "VIU TV",
            "httpurl": "p2p://'.$ngip.'/579f030b00085050037e5c0b3c99552d.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 749,
            "name": "凤凰中文",
            "httpurl": "p2p://'.$ngip.'/579f02e300040d69037dbeb32d634fb7.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 750,
            "name": "凤凰香港",
            "httpurl": "p2p://'.$ngip.'/579f030b00012c2f037e5a37704b611e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 751,
            "name": "凤凰资讯",
            "httpurl": "p2p://'.$ngip.'/579f02e300057b09037dbf110767717b.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 752,
            "name": "TVB新闻",
            "httpurl": "p2p://'.$ngip.'/579f030c00029391037e5e7b799c4ace.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 753,
            "name": "东森新闻",
            "httpurl": "p2p://'.$ngip.'/579f031f000628e2037ea99e0ae731f3.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 754,
            "name": "TVBS新闻",
            "httpurl": "p2p://'.$ngip.'/579f031f0000af52037ea83771640091.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 755,
            "name": "壹电视新闻",
            "httpurl": "p2p://'.$ngip.'/579f0355000920a2037f7d50587c6b06.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 756,
            "name": "三立新闻",
            "httpurl": "p2p://'.$ngip.'/579f031f0004bb42037ea94044f3282c.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 757,
            "name": "中天新闻",
            "httpurl": "p2p://'.$ngip.'/579f031e00098441037ea692749a5ece.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 758,
            "name": "非凡新闻",
            "httpurl": "p2p://'.$ngip.'/579f031f00034da2037ea8e269713892.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 759,
            "name": "年代新闻",
            "httpurl": "p2p://'.$ngip.'/579f031e000d9032037ea79b7cfa047e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 760,
            "name": "民视新闻",
            "httpurl": "p2p://'.$ngip.'/579f033800032b6e037f0a822f0a4786.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 761,
            "name": "东森财经",
            "httpurl": "p2p://'.$ngip.'/579f032f00041a6e037ee797469c0f71.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 762,
            "name": "华视HD",
            "httpurl": "p2p://'.$ngip.'/579f03170008bc35037e8b06056b051e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 763,
            "name": "民视HD",
            "httpurl": "p2p://'.$ngip.'/579f03170004ed34037e8a0d3edd0dc9.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 764,
            "name": "台视HD",
            "httpurl": "p2p://'.$ngip.'/579f031700065ad4037e8a6a4b8d37d8.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 765,
            "name": "公视HD",
            "httpurl": "p2p://'.$ngip.'/579f0338000a129f037f0c460c657b31.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 766,
            "name": "中视",
            "httpurl": "p2p://'.$ngip.'/579f0346000441a7037f41797d0c3edf.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 767,
            "name": "国家地理HD",
            "httpurl": "p2p://'.$ngip.'/579f034e000f02d6037f637a37c17e56.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 768,
            "name": "野生地理",
            "httpurl": "p2p://'.$ngip.'/579f03460000ec86037f409f0a856748.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 769,
            "name": "Discovery",
            "httpurl": "p2p://'.$ngip.'/579f03160007ceb3037e86e20e283d30.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 770,
            "name": "探索科学",
            "httpurl": "p2p://'.$ngip.'/579f0355000cefa2037f7e4a07441f4a.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 771,
            "name": "BBC Knowledge Channel",
            "httpurl": "p2p://'.$ngip.'/579f03960006971403807a927c385f83.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 772,
            "name": "历史频道",
            "httpurl": "p2p://'.$ngip.'/579f03470002cdc8037f45024ff56143.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 773,
            "name": "HISTORY 2",
            "httpurl": "p2p://'.$ngip.'/579f03970000238503807cd471c37a10.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 774,
            "name": "卫视洋片",
            "httpurl": "p2p://'.$ngip.'/579f030c00069f81037e5f8411a44f2c.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 775,
            "name": "Universal Channel",
            "httpurl": "p2p://'.$ngip.'/579f03960008f87403807b2e3fc16b6d.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 776,
            "name": "syfy",
            "httpurl": "p2p://'.$ngip.'/579f0379000d7c8103800b0e2f0c0859.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 777,
            "name": "HBO",
            "httpurl": "p2p://'.$ngip.'/579f030c000b9f32037e60cc58863b84.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 778,
            "name": "HBO强档",
            "httpurl": "p2p://'.$ngip.'/579f034f00048357037f64b21d9864d9.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 779,
            "name": "HBO家庭",
            "httpurl": "p2p://'.$ngip.'/579f03560008dd73037f812757e60a9f.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 780,
            "name": "HBO原创",
            "httpurl": "p2p://'.$ngip.'/579f034f00066ad7037f652f6dec1dae.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 781,
            "name": "星卫电影",
            "httpurl": "p2p://'.$ngip.'/579f0346000310f7037f412b58e77391.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 782,
            "name": "美亚电影",
            "httpurl": "p2p://'.$ngip.'/579f034600021d37037f40ed27dc63ba.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 783,
            "name": "美亚电影港版",
            "httpurl": "p2p://'.$ngip.'/579f0316000f2fc4037e88c56d85348e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 784,
            "name": "靖天电影",
            "httpurl": "p2p://'.$ngip.'/579f0396000cc77403807c2801525ad9.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 785,
            "name": "CHC高清电影",
            "httpurl": "p2p://'.$ngip.'/579f031600056d53037e8646225f2587.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 786,
            "name": "CHC动作电影",
            "httpurl": "p2p://'.$ngip.'/579f033900036220037f0e785cf36b37.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 787,
            "name": "龙华电影",
            "httpurl": "p2p://'.$ngip.'/579f037a0000d89203800bba04232136.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 788,
            "name": "龙华洋片",
            "httpurl": "p2p://'.$ngip.'/579f034f000d8ef8037f67034d057e4b.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 789,
            "name": "FOX优质电影",
            "httpurl": "p2p://'.$ngip.'/579f03790004add0038008cd014950b0.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 790,
            "name": "FOX家庭",
            "httpurl": "p2p://'.$ngip.'/579f034f0000f146037f63c8671e60bf.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 791,
            "name": "FOX警匪",
            "httpurl": "p2p://'.$ngip.'/579f0355000a5152037f7d9e73122b73.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 792,
            "name": "FOX",
            "httpurl": "p2p://'.$ngip.'/579f03280004fcf2037ecc7937d60f5d.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 793,
            "name": "CineMax",
            "httpurl": "p2p://'.$ngip.'/579f032e000e99ee037ee65f43ef6b80.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 794,
            "name": "Sundance",
            "httpurl": "p2p://'.$ngip.'/579f035e0000d091037f9e5874c1030c.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 795,
            "name": "Warner TV",
            "httpurl": "p2p://'.$ngip.'/579f0396000a661403807b8c6d8f06e0.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 796,
            "name": "罪案侦缉频道",
            "httpurl": "p2p://'.$ngip.'/579f0396000b96c403807bda27ba59ab.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 797,
            "name": "好莱坞电影",
            "httpurl": "p2p://'.$ngip.'/579f031600069e03037e8694405c3ea0.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 798,
            "name": "卫视中文电影",
            "httpurl": "p2p://'.$ngip.'/579f030c0004f4f1037e5f170cf956c1.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 799,
            "name": "高清影视",
            "httpurl": "p2p://'.$ngip.'/579f0379000c0ee103800ab145ac5f4a.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 800,
            "name": "天映频道",
            "httpurl": "p2p://'.$ngip.'/579f0346000e4108037f44080fcf29f6.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 801,
            "name": "纬来电影",
            "httpurl": "p2p://'.$ngip.'/579f031f00075993037ea9ec227f0d26.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 802,
            "name": "东森电影",
            "httpurl": "p2p://'.$ngip.'/579f030c00084a11037e5ff10dfe7024.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 803,
            "name": "东森洋片",
            "httpurl": "p2p://'.$ngip.'/579f030c00097ac1037e603f6eaf16bd.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 804,
            "name": "超视",
            "httpurl": "p2p://'.$ngip.'/579f031e00057851037ea5881c6c040e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 805,
            "name": "三立台湾",
            "httpurl": "p2p://'.$ngip.'/579f03290000add3037ecf47438f7839.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 806,
            "name": "三立国际",
            "httpurl": "p2p://'.$ngip.'/579f032900038914037ed00265cc350b.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 807,
            "name": "三立都会",
            "httpurl": "p2p://'.$ngip.'/579f034f0008cc37037f65cb797730b5.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 808,
            "name": "八大第一台",
            "httpurl": "p2p://'.$ngip.'/579f03380007b13f037f0baa6a002c9f.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 809,
            "name": "东森综合",
            "httpurl": "p2p://'.$ngip.'/579f031e0006e5f1037ea5e632be367a.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 810,
            "name": "TVBS综合",
            "httpurl": "p2p://'.$ngip.'/579f031e000ec0e2037ea7e91d4629a4.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 811,
            "name": "壹电视综合",
            "httpurl": "p2p://'.$ngip.'/579f03550007b302037f7cf30a2c34c6.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 812,
            "name": "纬来综合",
            "httpurl": "p2p://'.$ngip.'/579f03280003cc42037ecc2b02925973.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 813,
            "name": "ELTA综合",
            "httpurl": "p2p://'.$ngip.'/579f02e20003d6b7037dbabd728c7d2f.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 814,
            "name": "八大综合",
            "httpurl": "p2p://'.$ngip.'/579f03380008e1ef037f0bf82cfe668e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 815,
            "name": "中天综合",
            "httpurl": "p2p://'.$ngip.'/579f031e000af1e1037ea6ef3f8b4baf.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 816,
            "name": "JET综合",
            "httpurl": "p2p://'.$ngip.'/579f032e000d693e037ee61169fd0e80.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 817,
            "name": "寰宇综合",
            "httpurl": "p2p://'.$ngip.'/579f035e000de822037fa1b21e034246.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 818,
            "name": "TVBS欢乐",
            "httpurl": "p2p://'.$ngip.'/579f031f0001e002037ea8854a1d1bb0.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 819,
            "name": "纬来育乐",
            "httpurl": "p2p://'.$ngip.'/579f032f00067bcf037ee8335c091fd7.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 820,
            "name": "八大娱乐K台",
            "httpurl": "p2p://'.$ngip.'/579f035e000831a1037fa03b2f1f7088.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 821,
            "name": "中天娱乐",
            "httpurl": "p2p://'.$ngip.'/579f0339000492d0037f0ec6283e7717.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 822,
            "name": "FOX MOVIES",
            "httpurl": "p2p://'.$ngip.'/579f037a0005d84203800d01796245ef.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 823,
            "name": "Star World",
            "httpurl": "p2p://'.$ngip.'/579f03380001fabe037f0a3472f0598b.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 824,
            "name": "韩国娱乐MHD",
            "httpurl": "p2p://'.$ngip.'/579f037900083fe1038009b71cec6088.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 825,
            "name": "Fx HD",
            "httpurl": "p2p://'.$ngip.'/579f0355000b8202037f7dec13750011.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 826,
            "name": "DIVA",
            "httpurl": "p2p://'.$ngip.'/579f035d000dee60037f9dcb64353e87.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 827,
            "name": "TVB经典",
            "httpurl": "p2p://'.$ngip.'/579f030b000e43c0037e5d913df5520c.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 828,
            "name": "TVB星河",
            "httpurl": "p2p://'.$ngip.'/579f030c00040131037e5ed873982a39.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 829,
            "name": "TVB8",
            "httpurl": "p2p://'.$ngip.'/579f03390001f480037f0e1a54e5077d.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 830,
            "name": "TVB日剧",
            "httpurl": "p2p://'.$ngip.'/579f0395000c16e20380781334f54617.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 831,
            "name": "TVB韩剧",
            "httpurl": "p2p://'.$ngip.'/579f03960004ec8303807a25512c2dad.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 832,
            "name": "ELTA影剧",
            "httpurl": "p2p://'.$ngip.'/579f034f00079b87037f657d5aa87135.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 833,
            "name": "龙华戏剧",
            "httpurl": "p2p://'.$ngip.'/579f035f0005ca03037fa3863bb64448.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 834,
            "name": "龙华偶像",
            "httpurl": "p2p://'.$ngip.'/579f035f0003e283037fa30949c20683.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 835,
            "name": "八大戏剧",
            "httpurl": "p2p://'.$ngip.'/579f035e0002b811037f9ed4371f41b1.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 836,
            "name": "东森戏剧",
            "httpurl": "p2p://'.$ngip.'/579f035d0009e270037f9cc2104277b2.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 837,
            "name": "纬来戏剧",
            "httpurl": "p2p://'.$ngip.'/579f032f00054b1e037ee7e5160f5de9.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 838,
            "name": "纬来日本",
            "httpurl": "p2p://'.$ngip.'/579f032800062da2037eccc779bf1705.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 839,
            "name": "国兴卫视",
            "httpurl": "p2p://'.$ngip.'/579f032f0002e9be037ee74957192ba9.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 840,
            "name": "AXN电影",
            "httpurl": "p2p://'.$ngip.'/579f032900021b74037ecfa41eba31dc.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 841,
            "name": "橄榄球频道",
            "httpurl": "p2p://'.$ngip.'/579f03170007c875037e8ac879d0769e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 842,
            "name": "足球HD",
            "httpurl": "p2p://'.$ngip.'/579f0316000dc224037e8868645a04a0.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 843,
            "name": "NBA HD",
            "httpurl": "p2p://'.$ngip.'/579f035d000bc9f0037f9d3f1a703eab.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 844,
            "name": "FOX Spoets HD",
            "httpurl": "p2p://'.$ngip.'/579f03460006a307037f42154c5619e2.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 845,
            "name": "卫视体育",
            "httpurl": "p2p://'.$ngip.'/579f0316000b23d3037e87bc6ecb2bd1.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 846,
            "name": "FOX PLUS HD",
            "httpurl": "p2p://'.$ngip.'/579f0346000d4d48037f43ca38405930.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 847,
            "name": "新视觉HD",
            "httpurl": "p2p://'.$ngip.'/579f032800088f03037ecd6371ae4227.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 848,
            "name": "纬来体育",
            "httpurl": "p2p://'.$ngip.'/579f031e000c2291037ea73d50503ace.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 849,
            "name": "ELTA体育",
            "httpurl": "p2p://'.$ngip.'/579f034f000221f6037f64165e9f68d1.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 850,
            "name": "博斯运动",
            "httpurl": "p2p://'.$ngip.'/579f032e000c388e037ee5c3247f7843.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 851,
            "name": "博斯高尔夫",
            "httpurl": "p2p://'.$ngip.'/579f032e000b07dd037ee57578b33fea.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 852,
            "name": "高尔夫",
            "httpurl": "p2p://'.$ngip.'/579f0316000c9173037e881a258c2b05.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 853,
            "name": "高尔夫网球",
            "httpurl": "p2p://'.$ngip.'/579f0338000b434f037f0c946e696dd0.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 854,
            "name": "高尔夫 HD",
            "httpurl": "p2p://'.$ngip.'/579f0346000c1c98037f437c237e33e7.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 855,
            "name": "EDGE体育",
            "httpurl": "p2p://'.$ngip.'/579f037a000376e203800c6573ff5cff.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 856,
            "name": "ASN HD",
            "httpurl": "p2p://'.$ngip.'/579f0346000aebe8037f432e74075ced.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 857,
            "name": "欧洲体育",
            "httpurl": "p2p://'.$ngip.'/579f03390000c3d0037f0dcc63a2155e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 858,
            "name": "欧洲足球",
            "httpurl": "p2p://'.$ngip.'/579f03960007c7c403807ae04cc80d0a.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 859,
            "name": "Z 频道",
            "httpurl": "p2p://'.$ngip.'/579f034f000352a6037f6464125a7b08.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 860,
            "name": "迪斯尼卡通",
            "httpurl": "p2p://'.$ngip.'/579f03290004b9c4037ed05046722ea9.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 861,
            "name": "momo亲子台",
            "httpurl": "p2p://'.$ngip.'/579f032800075e52037ecd1513501208.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 862,
            "name": "CN卡通",
            "httpurl": "p2p://'.$ngip.'/579f03460007d3b7037f4263677d08b1.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 863,
            "name": "东森幼幼",
            "httpurl": "p2p://'.$ngip.'/579f031e000816a1037ea634437f6826.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 864,
            "name": "龙华动画",
            "httpurl": "p2p://'.$ngip.'/579f035f000237f2037fa29c54352937.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 865,
            "name": "ANIMAX",
            "httpurl": "p2p://'.$ngip.'/579f035e00060d31037f9faf179b6987.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 866,
            "name": "AnimalPlanet",
            "httpurl": "p2p://'.$ngip.'/579f032f000a87bf037ee93c59a964e5.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 867,
            "name": "探索动力",
            "httpurl": "p2p://'.$ngip.'/579f035600017c63037f7f440b9676c8.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 868,
            "name": "探索家庭",
            "httpurl": "p2p://'.$ngip.'/579f035600004bb2037f7ef64dee1da9.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 869,
            "name": "AXN HD",
            "httpurl": "p2p://'.$ngip.'/579f035e000c00a2037fa1350fd51f27.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 870,
            "name": "国家地理音乐",
            "httpurl": "p2p://'.$ngip.'/579f03560002ad13037f7f9253cb170e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 871,
            "name": "Channel V HD",
            "httpurl": "p2p://'.$ngip.'/579f035f00005072037fa21f4d003ffd.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 872,
            "name": "MTV Live",
            "httpurl": "p2p://'.$ngip.'/579f0396000e351403807c8612b113c2.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 873,
            "name": "FASHION TV",
            "httpurl": "p2p://'.$ngip.'/579f035e000425b1037f9f326daf178a.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 874,
            "name": "Li时尚生活",
            "httpurl": "p2p://'.$ngip.'/579f035600076fd3037f80ca4359270f.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 875,
            "name": "地理悠人",
            "httpurl": "p2p://'.$ngip.'/579f035000003438037f67800fe37f3a.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 876,
            "name": "EYE旅游",
            "httpurl": "p2p://'.$ngip.'/579f03af0003d68f0380db86327c156d.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 877,
            "name": "TLC",
            "httpurl": "p2p://'.$ngip.'/579f035600050e73037f802e732b603a.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 878,
            "name": "亚洲旅游",
            "httpurl": "p2p://'.$ngip.'/579f0395000ef223038078ce67385290.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 879,
            "name": "Outdoor",
            "httpurl": "p2p://'.$ngip.'/579f03af0005442f0380dbe405fc2493.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 880,
            "name": "美食星球",
            "httpurl": "p2p://'.$ngip.'/579f0350000127f8037f67be00a815cc.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 881,
            "name": "莲花卫视",
            "httpurl": "p2p://'.$ngip.'/579f02e300085649037dbfcc556e60f9.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 882,
            "name": "东风卫视",
            "httpurl": "p2p://'.$ngip.'/579f0356000b01e4037f81b450ad6cd4.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 883,
            "name": "卫视中文台",
            "httpurl": "p2p://'.$ngip.'/579f034f0009fce7037f661921d30c27.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 884,
            "name": "星空卫视",
            "httpurl": "p2p://'.$ngip.'/579f02e3000225e9037dbe36636c5cef.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 885,
            "name": "大爱",
            "httpurl": "p2p://'.$ngip.'/579f031f00097e03037eaa783543218e.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 886,
            "name": "好消息",
            "httpurl": "p2p://'.$ngip.'/579f032800029b92037ecbdd575272ca.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 887,
            "name": "华臧卫视",
            "httpurl": "p2p://'.$ngip.'/579f03af0006b1cf0380dc4150db0add.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 888,
            "name": "BBC",
            "httpurl": "p2p://'.$ngip.'/579f03170003bc84037e89bf1df765c0.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        },
        {
            "Category": "南瓜TV",
            "id": 889,
            "name": "CNN",
            "httpurl": "p2p://'.$ngip.'/579f033800045c1e037f0ad027c97485.ts",
            "hotlink": "'.$nglink.'",
            "logo": "",
            "epg": "",
            "enable": ""
        }
    ],
    "Category": [
        "壹粤TV",
        "爱播TV",
        "丽宝TV",
        "葫芦TV",
        "南瓜TV"
    ]
}';


function curl_link($url){
$timeout = 5;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result= curl_exec ($ch);
curl_close ($ch);
return $result;
}
?>