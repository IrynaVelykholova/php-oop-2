<?php
    require_once __DIR__ . '/classi/Cani.php';
    require_once __DIR__ . '/classi/Gatti.php';
    require_once __DIR__ . '/classi/Cibo.php';
    require_once __DIR__ . '/classi/Gioco.php';
    require_once __DIR__ . '/classi/Cuccia.php';
    
$cibi = [
    new Cibo("croccantini", "cani", "5,00€", "https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1662822271/products/pim/7613034147486_ONE-Mini-Dog-Active-Pollo-e-Riso-800g_8383_IT/purina-one-mini-10-kg-active-croccantini-per-cani-con-pollo-e-riso"),
    new Cibo("cibo umido", "cani", "5,00€", "https://fera24.it/images/thumbnails/560/708/detailed/129/5900951298943F1.jpg"),
    new Cibo("croccantini", "gatti", "5,00€", "https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1682695180/products/pim/5900951283734_B1_ITA/whiskas-croccantini-per-gatti-adulti-con-tonno"),
    new Cibo("cibo umido", "gatti", "5,00€", "https://m.media-amazon.com/images/I/716Zb1iNWOL._AC_UF894,1000_QL80_.jpg"),
];

$cucce = [
    new Cuccia("casetta", "cani", "50,00€", "https://www.mazzucatolegnami.it/media/catalog/product/cache/94a91303fe3fefa25a25942ca0e1611e/0/9/09-63.02.jpg"),
    new Cuccia("cuccia morbida", "cani", "15,00€", "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg"),
    new Cuccia("casetta", "gatti", "25,00€", "https://m.media-amazon.com/images/I/71WPVJ+TIAL._AC_UF894,1000_QL80_.jpg"),
    new Cuccia("cuccia morbida", "gatti", "10,00€", "https://croci.net/wp-content/uploads/2020/09/Cuccia_per_gatto_Glam_Ciambella.jpg"),
];

$giochi = [
    new Gioco("osso", "cani", "peluches per cani", "5,00€", "https://petmarket.it/11506-large_default/gioco-osso-vinyl-puppy.jpg"),
    new Gioco("pollo", "cani", "5,00€", "https://static.bighunter.net/foto/1_Def_per_web_zoom/14415/14415.jpg"),
    new Gioco("palline", "gatti", "5,00€", "https://ss-pics.s3.eu-west-1.amazonaws.com/files/1997289/page-71NiYQc1faL._AC_SX679_.jpg?1631802859"),
    new Gioco("laser", "gatti", "5,00€", "https://static.zoomalia.com/prod_img/43560/la_64955b37c5c270e5d84c793e486d798c01d1539247702.jpg"),
];
