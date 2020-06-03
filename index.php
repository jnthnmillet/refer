<html>
    <head>
        	<meta charset="utf-8">
<title>
<?php echo $_GET["item"]; ?> | ReferApps
</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="RefferApps PH, ReferApps, e-commerce, reffer, refer apps">
<meta name="description" content="To provide marketing tools to companies and individuals and create a perpetual income stream through referrals to stir and revolutionize economy. 25% Economic Stimulus Program.">
<link rel="apple-touch-icon" sizes="57x57" href="https://www.referapps.com/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://www.referapps.com/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://www.referapps.com/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://www.referapps.com/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://www.referapps.com/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://www.referapps.com/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://www.referapps.com/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://www.referapps.com/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://www.referapps.com/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://www.referapps.com/favicon/android-icon-192x192.png">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:site_name" content="ReferApps">
<meta property="og:description" content="To provide marketing tools to companies and individuals and create a perpetual income stream through referrals to stir and revolutionize economy. 25% Economic Stimulus Program.">  	<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<!--<meta id="ogThumb" property="og:image" content="https://referapps-storage.s3-ap-southeast-1.amazonaws.com/storage/products/20190211/wsNctMYYoOEr7y33fZAS021120191057.jpg">-->
<meta id="ogThumb" property="og:image" content="<?php echo 'https://referapps-storage.s3-ap-southeast-1.amazonaws.com/storage/products/'.$_GET["thumb"]; ?>" >
<meta id="ogTitle" property="og:title" content="<?php echo $_GET["item"].' | ReferApps'; ?>">
    </head>
<body style="border: 0;padding: 0">

    <!--<a href="intent://referapps#Intent;scheme=referral;end">Open App</a>-->
    <a id="applink" href="" style="display:none;">Open App</a>
    <!--<iframe -->
    <!--    src="https://www.referapps.com/products-services/ferarri-watches-pit-crew/NTAx?referrer=laura7" -->
    <!--    title="W3Schools Free Online Web Tutorials"-->
    <!--    allowfullscreen=true-->
    <!--    width='100%'-->
    <!--    height='100%'>-->
    <!--</iframe>-->
    
    <!--<div id="site"></div>-->

    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

    <script>
    
    // console.log("fetching...")
    // let id = 282
    //     let token = "base64:jQWd6anzPdOMKPL6ijicSkt4APpGWQjLlUS8gbdhXX4="
    // $.ajax({
    //      url: `https://www.referapps.com/api/product/show.json?id=${id}&api_token=${token}`,
    //      data: { signature: authHeader },
    //      type: "GET",
    //      beforeSend: function(xhr){xhr.setRequestHeader('X-Test-Header', 'test-value');},
    //      success: function() { alert('Success!' + authHeader); }
    //   });
        // let id = 282
        // let token = "base64:jQWd6anzPdOMKPL6ijicSkt4APpGWQjLlUS8gbdhXX4="
        // $.get(`https://www.referapps.com/api/product/show.json?id=${id}&api_token=${token}`, 
        //     function(data){
        //         console.log(data)
        // })
        
    

    window.onload = function(){
        let appLink = document.getElementById("applink")
        let thumb = document.getElementById('thumb')
        let url = new URL(window.location.href)
        let id = url.searchParams.get("id")
        let referrer = url.searchParams.get("referrer")
        let item = url.searchParams.get('item')
        let image = url.searchParams.get("thumb")
        if(id && referrer){
            referrer = referrer.split(" ").join("_")
            console.log(referrer)
            thumb.content = 'https://referapps-storage.s3-ap-southeast-1.amazonaws.com/storage/products/' + image
            applink.href = `referapps://referral/${id}/${referrer}`
            applink.click()
            
            setTimeout(function(){
                window.location.href = "https://play.google.com/store/apps/details?id=com.referappsinc.referapps"
            }, 5000)
            
        }else{
            // window.location.href = "https://play.google.com/store/apps/details?id=com.referappsinc.referapps"
        }
        // console.log(id, referrer)
    }
    </script>

</body>
</html>
