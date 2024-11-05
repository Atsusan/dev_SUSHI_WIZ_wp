 <!-- ▼ drawer contents -->
 <div id="drawerMenu" class="c-drawerMenu">
   <div class="c-drawerMenu__wrap">
     <a href="<?php echo esc_url(home_url('/')); ?>" class="c-drawerMenu__logoLink u-displayNone--PU">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="SUSHI WIZ" class="c-drawerMenu__logoImg" width="69"
         height="64">
     </a>
     <div class="c-drawerMenu__inner">
       <div class="c-drawerMenu__headingBox">
         <p class="c-drawerMenu__heading">MENU</p>
       </div>
       <nav class="c-drawerMenu__nav">
         <ul class="c-drawerMenu__menu">
           <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
             <a href="<?php echo esc_url(home_url('/concept')); ?>" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                 class="c-drawerMenu__subText">コンセプト</span>CONCEPT</a>
           </li>
           <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
             <a href="<?php echo esc_url(home_url('/plan')); ?>" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                 class="c-drawerMenu__subText">プラン</span>PLAN</a>
           </li>
           <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
             <a href="<?php echo esc_url(home_url('/profile')); ?>" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                 class="c-drawerMenu__subText">シェフについて</span>PROFILE</a>
           </li>
           <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
             <a href="<?php echo esc_url(home_url('/faq')); ?>" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                 class="c-drawerMenu__subText">よくある質問</span>FAQ</a>
           </li>
           <li class="c-drawerMenu__menuItem" onclick="drawerClose('drawerMenu')">
             <a href="<?php echo esc_url(home_url('/archive')); ?>" class="c-drawerMenu__menuLink" onclick="drawerClose('drawerMenu')"><span
                 class="c-drawerMenu__subText">トピックス</span>ARTICLE</a>
           </li>
           <li class="c-drawerMenu__menuItem u-displayNone--PO">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/drawer-item.jpg" alt="出張 寿司" class="c-drawerMenu__img" width="390"
               height="166">
           </li>
         </ul>
       </nav>
       <div class="c-drawerMenu__bottomContents">
         <div class="c-drawerMenu__btnWrap">
           <div class="c-drawerMenu__btnContact">
             <a href="<?php echo esc_url(home_url('contact')); ?>" class="c-drawerMenu__btnLink">
               <span class="c-drawerMenu__btnSubText">お問い合わせ</span>
               <span class="c-drawerMenu__btnMainText">CONTACT</span>
             </a>
           </div>
           <div class="c-drawerMenu__btnResevation">
             <a href="<?php echo esc_html(home_url('reservation')); ?>" class="c-drawerMenu__btnLink--bgImage">
               <span class="c-drawerMenu__btnSubText">予約</span>
               <span class="c-drawerMenu__btnMainText">RESERVATION</span>
             </a>
           </div>
         </div>
         <ul class="c-drawerMenu__snsBox">
           <li class="c-drawerMenu__snsItem">
             <?php $line_url = get_option('line_url', '') ?>
             <?php if ($line_url): ?>
               <a href="<?php echo esc_url($line_url); ?>" class="c-drawerMenu__snsLink">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sns-line.png" alt="LINE" class="c-drawerMenu__snsImg" width="118"
                   height="118">
               </a>
             <?php endif; ?>
           </li>
           <li class="c-drawerMenu__snsItem">
             <?php $instagram_url = get_option('instagram_url', '') ?>
             <?php if ($instagram_url): ?>
               <a href="<?php echo esc_url($instagram_url); ?>" class="c-drawerMenu__snsLink">
                 <img class="c-drawerMenu__snsImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sns-Instagram.svg" alt="Instagram"
                   width="20" height="19">
               </a>
             <?php endif; ?>
           </li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <!-- ▲ drawer contents -->