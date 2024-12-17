<?php
    $page = $_SERVER['PHP_SELF'];
?>

<div class="w-full py-3 px-6 md:px-4 fixed bottom-0 md:top-0 z-10 md:w-[70px] bg-white shadow-[0px_0px_2px_#9b9b9b]">
    <ul class="flex md:h-full gap-5 md:gap-8 justify-between md:flex-col md:justify-center md:items-center">
        <li>
            <a href="" class="text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" id="home">
                    <path class="hover:fill-[#200E32] <?php if($page == '/resources/views/blog/blog.php') echo 'fill-[#200E32]' ?>" fill="#aba6a6" d="M6.64373233,18.7821107 L6.64373233,15.7152449 C6.64371685,14.9380902 7.27567036,14.3067075 8.05843544,14.3018198 L10.9326107,14.3018198 C11.7188748,14.3018198 12.3562677,14.9346318 12.3562677,15.7152449 L12.3562677,15.7152449 L12.3562677,18.7732212 C12.3562498,19.4472781 12.9040221,19.995083 13.5829406,20 L15.5438266,20 C16.4596364,20.0023291 17.3387522,19.6427941 17.9871692,19.0007051 C18.6355861,18.3586161 19,17.4867541 19,16.5775231 L19,7.86584638 C19,7.13138763 18.6720694,6.43471253 18.1046183,5.96350064 L11.4429783,0.674268354 C10.2785132,-0.250877524 8.61537279,-0.22099178 7.48539114,0.745384082 C7.48539114,0.745384082 0.967012253,5.96350064 0.967012253,5.96350064 C0.37274068,6.42082162 0.0175522924,7.11956262 0,7.86584638 L0,16.5686336 C0,18.463707 1.54738155,20 3.45617342,20 L5.37229029,20 C5.69917279,20.0023364 6.01348703,19.8750734 6.24547302,19.6464237 C6.477459,19.417774 6.60792577,19.1066525 6.60791706,18.7821107 L6.64373233,18.7821107 Z" transform="translate(2.5 2)"></path>
                </svg>
            </a>
            <div class="bg-[#aba6a6]"></div>
        </li>
        <li>
            <a href="#" class="text-gray-500">
            <svg class="w-9 h-9 fill-[#aba6a6] hover:fill-[#200E32]" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" viewBox="0 0 32 32" id="videos">
                <path d="M4.6799927,28.3200073h18.4500122c1.3099976,0,2.4099731-0.9400024,2.6400146-2.1900024H8.8699951
                    c-2.5800171,0-4.6799927-2.1000366-4.6799927-4.6799927V7.9099731C2.9400024,8.1499634,2,9.2399902,2,10.5499878v15.0999756
                    C2,27.1199951,3.2000122,28.3200073,4.6799927,28.3200073z"></path>
                <polygon points="15.28 17.39 21.32 13.9 15.28 10.41"></polygon>
                <path d="M27.3200073,3.6799927H8.8699951c-1.4799805,0-2.6799927,1.2000122-2.6799927,2.6699829v15.1000366
                    c0,1.4799805,1.2000122,2.6799927,2.6799927,2.6799927h18.4500122C28.7999878,24.1300049,30,22.9299927,30,21.4500122V6.3499756
                    C30,4.8800049,28.7999878,3.6799927,27.3200073,3.6799927z M22.5599976,15.5l-6.5200195,3.7600098
                    c-0.289978,0.1699829-0.6099854,0.25-0.9199829,0.25c-0.3200073,0-0.6300049-0.0800171-0.9199829-0.25
                    c-0.5800171-0.3300171-0.9199829-0.9200439-0.9199829-1.5900269v-7.539978c0-0.6600342,0.3399658-1.2600098,0.9199829-1.5900269
                    c0.5700073-0.3300171,1.2600098-0.3300171,1.8399658,0l6.5200195,3.7700195
                    c0.5800171,0.3300171,0.9199829,0.9299927,0.9199829,1.5899658C23.4799805,14.5700073,23.1400146,15.1599731,22.5599976,15.5z"></path>
            </svg>
            </a>
        </li>
        <li>
            <a href="#" class="text-gray-500">
                <img class="bg-red-600 rounded-full p-2 hover:bg-red-500" width="40" src="../../img/search.svg" alt="">
            </a>
        </li>
        <li>
            <a href="#" class="text-gray-500">
            <svg class="w-8 h-8 fill-[#aba6a6] hover:fill-[#200E32]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
            </svg>
            </a>
        </li>
        <li>
            <a href="#" class="text-gray-500">
            <svg class="w-9 h-9 fill-[#aba6a6] hover:fill-[#200E32]" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 32 32" id="account">
                <path d="M16,113.889C12.437,113.889 9.285,114.883 7.327,116.367C5.83,117.501 5,118.932 5,120.444C5,121.957 5.83,123.388 7.327,124.522C9.285,126.006 12.437,127 16,127C19.563,127 22.715,126.006 24.673,124.522C26.17,123.388 27,121.957 27,120.444C27,118.932 26.17,117.501 24.673,116.367C22.715,114.883 19.563,113.889 16,113.889ZM16,97C12.159,97 9,100.339 9,104.5C9,108.661 12.159,112 16,112C19.841,112 23,108.661 23,104.5C23,100.339 19.841,97 16,97Z" transform="translate(0 -96)"></path>
            </svg>

            </a>
        </li>
    </ul>
</div>