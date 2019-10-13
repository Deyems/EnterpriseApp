<?php
    //session_start();
    $c_user = $_SESSION['logger'];
?>
<?php
    //Logo CALL 
    $logo = mysqli_query($conn, "SELECT * FROM logo where user_logger = '$c_user' ");
        while($r_logo = mysqli_fetch_array($logo)){
           $url = $r_logo['f_url'];
           $alt = $r_logo['alt'];
    }

    /*CALL TO INDEX_LOGO (LOGO IMAGE FOR INDEX PAGE) */
    $index_logo = mysqli_query($conn, "SELECT * FROM index_logo where id = '1' ");
        while($r_index_logo = mysqli_fetch_array($index_logo)){
           $img_name = $r_index_logo['images'];
           $img_link = $r_index_logo['link'];
           $img_alt = $r_index_logo['alt'];
    }

    /*CALL TO INDEX_NAV (NAV/MENU FOR INDEX PAGE) */
    $index_nav1 = mysqli_query($conn, "SELECT * FROM index_nav where id = '1' ");
        while($r_index_nav1 = mysqli_fetch_array($index_nav1)){
           $nav1 = $r_index_nav1['tex'];
           $navlink1 = $r_index_nav1['link'];
    }

    $index_nav2 = mysqli_query($conn, "SELECT * FROM index_nav where id = '2' ");
        while($r_index_nav2 = mysqli_fetch_array($index_nav2)){
           $nav2 = $r_index_nav2['tex'];
           $navlink2 = $r_index_nav2['link'];
    }

    $index_nav3 = mysqli_query($conn, "SELECT * FROM index_nav where id = '3' ");
        while($r_index_nav3 = mysqli_fetch_array($index_nav3)){
           $nav3 = $r_index_nav3['tex'];
           $navlink3 = $r_index_nav3['link'];
    }

    $index_nav4 = mysqli_query($conn, "SELECT * FROM index_nav where id = '4' ");
        while($r_index_nav4 = mysqli_fetch_array($index_nav4)){
           $nav4 = $r_index_nav4['tex'];
           $navlink4 = $r_index_nav4['link'];
    }

    $index_nav5 = mysqli_query($conn, "SELECT * FROM index_nav where id = '5' ");
        while($r_index_nav5 = mysqli_fetch_array($index_nav5)){
           $nav5 = $r_index_nav5['tex'];
           $navlink5 = $r_index_nav5['link'];
    }

    $index_nav6 = mysqli_query($conn, "SELECT * FROM index_nav where id = '6' ");
        while($r_index_nav6 = mysqli_fetch_array($index_nav6)){
           $nav6 = $r_index_nav6['tex'];
           $navlink6 = $r_index_nav6['link'];
    }

    $index_h_tex1 = mysqli_query($conn, "SELECT * FROM index_nav where id = '7' ");
        while($r_index_h_tex1 = mysqli_fetch_array($index_h_tex1)){
           $h_text1 = $r_index_h_tex1['tex'];
    }

    $index_h_tex2 = mysqli_query($conn, "SELECT * FROM index_nav where id = '8' ");
        while($r_index_h_tex2 = mysqli_fetch_array($index_h_tex2)){
           $h_text2 = $r_index_h_tex2['tex'];
    }

    /*CALL TO INDEX FOOTER HERE */
        /*CALL TO INDEX FOOTER FLEX1 */
    $index_f_flex1 = mysqli_query($conn, "SELECT * FROM index_footer_flex1 where id = '1' ");
        while($r_index_f_flex1 = mysqli_fetch_array($index_f_flex1)){
           $fl_title1 = $r_index_f_flex1['title'];
           $fl_text1 = $r_index_f_flex1['texter'];
           $fl_link1 = $r_index_f_flex1['link'];
    }

    $index_f_flex2 = mysqli_query($conn, "SELECT * FROM index_footer_flex1 where id = '2' ");
        while($r_index_f_flex2 = mysqli_fetch_array($index_f_flex2)){
           $fl_text2 = $r_index_f_flex2['texter'];
           $fl_link2 = $r_index_f_flex2['link'];
    }

    $index_f_flex3 = mysqli_query($conn, "SELECT * FROM index_footer_flex1 where id = '3' ");
        while($r_index_f_flex3 = mysqli_fetch_array($index_f_flex3)){
           $fl_text3 = $r_index_f_flex3['texter'];
           $fl_link3 = $r_index_f_flex3['link'];
    }

    $index_f_flex4 = mysqli_query($conn, "SELECT * FROM index_footer_flex1 where id = '4' ");
        while($r_index_f_flex4 = mysqli_fetch_array($index_f_flex4)){
           $fl_text4 = $r_index_f_flex4['texter'];
           $fl_link4 = $r_index_f_flex4['link'];
    }

        /*CALL TO INDEX FOOTER FLEX2 */
    $index_f_col2 = mysqli_query($conn, "SELECT * FROM index_footer_flex2 where id = '1' ");
    while($r_index_f_col2 = mysqli_fetch_array($index_f_col2)){
        $fl_col2_text = $r_index_f_col2['heading'];
        $fl_col2_image = $r_index_f_col2['img'];
    }

        /*CALL TO INDEX FOOTER FLEX3 */
    $index_f_col3_t1 = mysqli_query($conn, "SELECT * FROM index_footer_social where id = '1' ");
    while($r_index_f_col3_t1 = mysqli_fetch_array($index_f_col3_t1)){
        $fl_col3_icon1 = $r_index_f_col3_t1['icon_type'];
        $fl_col3_size1 = $r_index_f_col3_t1['icon_size'];
        $fl_col3_link1 = $r_index_f_col3_t1['icon_link'];
    }

    $index_f_col3_t2 = mysqli_query($conn, "SELECT * FROM index_footer_social where id = '2' ");
    while($r_index_f_col3_t2 = mysqli_fetch_array($index_f_col3_t2)){
        $fl_col3_icon2 = $r_index_f_col3_t2['icon_type'];
        $fl_col3_size2 = $r_index_f_col3_t2['icon_size'];
        $fl_col3_link2 = $r_index_f_col3_t2['icon_link'];
    }

    $index_f_col3_t3 = mysqli_query($conn, "SELECT * FROM index_footer_social where id = '3' ");
    while($r_index_f_col3_t3 = mysqli_fetch_array($index_f_col3_t3)){
        $fl_col3_icon3 = $r_index_f_col3_t3['icon_type'];
        $fl_col3_size3 = $r_index_f_col3_t3['icon_size'];
        $fl_col3_link3 = $r_index_f_col3_t3['icon_link'];
    }

    $index_f_col3_t4 = mysqli_query($conn, "SELECT * FROM index_footer_social where id = '4' ");
    while($r_index_f_col3_t4 = mysqli_fetch_array($index_f_col3_t4)){
        $fl_col3_icon4 = $r_index_f_col3_t4['icon_type'];
        $fl_col3_size4 = $r_index_f_col3_t4['icon_size'];
        $fl_col3_link4 = $r_index_f_col3_t4['icon_link'];
    }

    /*CALL TO INDEX COPYRIGHTS */
    $index_f_rights = mysqli_query($conn, "SELECT * FROM index_footer_right where id = '1' ");
    while($r_index_f_rights = mysqli_fetch_array($index_f_rights)){
        $fl_copy_text = $r_index_f_rights['content'];
    }
    /*END OF CALL TO INDEX FOOTER */

    /*CALL TO INDEX_ROLLERS (CONTENT FOR COUNTING NUMBERS) */
    $index_rollers1 = mysqli_query($conn, "SELECT * FROM index_rollers where id = '1' ");
        while($r_index_rollers1 = mysqli_fetch_array($index_rollers1)){
           $r_tit1 = $r_index_rollers1['title'];
           $r_Num1 = $r_index_rollers1['number'];
    }

    $index_rollers2 = mysqli_query($conn, "SELECT * FROM index_rollers where id = '2' ");
        while($r_index_rollers2 = mysqli_fetch_array($index_rollers2)){
           $r_tit2 = $r_index_rollers2['title'];
           $r_Num2 = $r_index_rollers2['number'];
    }

    $index_rollers3 = mysqli_query($conn, "SELECT * FROM index_rollers where id = '3' ");
        while($r_index_rollers3 = mysqli_fetch_array($index_rollers3)){
           $r_tit3 = $r_index_rollers3['title'];
           $r_Num3 = $r_index_rollers3['number'];
    }

    

    /*NEWS DATABASE CALL */

    $sql_news_count = "SELECT * FROM news";
    $news_r_sql_count =  mysqli_query($conn, $sql_news_count);
    $news_count = mysqli_num_rows($news_r_sql_count);

    $newscall = mysqli_query($conn, "SELECT * FROM news where id= '$news_count' ");
        while($r_newscall = mysqli_fetch_array($newscall)){
            $headlinedata = $r_newscall['headline'];
            $newscontent = $r_newscall['content'];
    }


    /* HEADERS FOR PAGES */
    $titles1 = mysqli_query($conn, "SELECT * FROM headers where id = '1' ");
        while($r_titles = mysqli_fetch_array($titles1)){
            $home = $r_titles['home'];
            $ewallet = $r_titles['e-wallet'];
            $fund = $r_titles['fund_wallet'];
            $history = $r_titles['pay_history'];
            $profile = $r_titles['profile'];
            $bulksms = $r_titles['bulksms'];
            $airtime = $r_titles['Airtime'];
            $smile = $r_titles['smile'];
            $data = $r_titles['Data_sub'];
            $tv_sub = $r_titles['tv_sub'];
            $electric = $r_titles['electricity'];
    }

    $titles2 = mysqli_query($conn, "SELECT * FROM headers where id = '2' ");
        while($r_titles2 = mysqli_fetch_array($titles2)){
            $sub_home = $r_titles2['home'];
            
    }
    
    /*INDEX OFFERS -- - --FOR INDEX PAGE  */
    $serv1 = mysqli_query($conn, "SELECT * FROM index_offers where id = '1' ");
        while($r_serv1 = mysqli_fetch_array($serv1)){
            $off_titles_1 = $r_serv1['title'];
            $off_notes_1 = $r_serv1['notes'];
            $off_reg_link_1 = $r_serv1['reg_link'];
    }

    $serv2 = mysqli_query($conn, "SELECT * FROM index_offers where id = '2' ");
        while($r_serv2 = mysqli_fetch_array($serv2)){
            $off_titles_2 = $r_serv2['title'];
            $off_notes_2 = $r_serv2['notes'];
            $off_reg_link_2 = $r_serv2['reg_link'];
    }

    $serv3 = mysqli_query($conn, "SELECT * FROM index_offers where id = '3' ");
        while($r_serv3 = mysqli_fetch_array($serv3)){
            $off_titles_3 = $r_serv3['title'];
            $off_notes_3 = $r_serv3['notes'];
            $off_reg_link_3 = $r_serv3['reg_link'];
    }

    $serv4 = mysqli_query($conn, "SELECT * FROM index_offers where id = '4' ");
        while($r_serv4 = mysqli_fetch_array($serv4)){
            $off_titles_4 = $r_serv4['title'];
            $off_notes_4 = $r_serv4['notes'];
            $off_reg_link_4 = $r_serv4['reg_link'];
    }

    $serv5 = mysqli_query($conn, "SELECT * FROM index_offers where id = '5' ");
        while($r_serv5 = mysqli_fetch_array($serv5)){
            $off_titles_5 = $r_serv5['title'];
            $off_notes_5 = $r_serv5['notes'];
            $off_reg_link_5 = $r_serv5['reg_link'];
    }

    $serv6 = mysqli_query($conn, "SELECT * FROM index_offers where id = '6' ");
        while($r_serv6 = mysqli_fetch_array($serv6)){
            $off_titles_6 = $r_serv6['title'];
            $off_notes_6 = $r_serv6['notes'];
            $off_reg_link_6 = $r_serv6['reg_link'];
    }

    /*DASHBOARD CALLS */
    $dashboard1 = mysqli_query($conn, "SELECT * FROM dashboard where id = '1' ");
        while($r_dashboard1 = mysqli_fetch_array($dashboard1)){
            $d_services_1 = $r_dashboard1['services'];
            $d_icons_1 = $r_dashboard1['icons'];
            $d_alt_1 = $r_dashboard1['alt'];
            $d_size_1 = $r_dashboard1['size'];
    }

    $dashboard2 = mysqli_query($conn, "SELECT * FROM dashboard where id = '2' ");
        while($r_dashboard2 = mysqli_fetch_array($dashboard2)){
            $d_services_2 = $r_dashboard2['services'];
            $d_icons_2 = $r_dashboard2['icons'];
            $d_alt_2 = $r_dashboard2['alt'];
            $d_size_2 = $r_dashboard2['size'];
    }

    $dashboard3 = mysqli_query($conn, "SELECT * FROM dashboard where id = '3' ");
        while($r_dashboard3 = mysqli_fetch_array($dashboard3)){
            $d_services_3 = $r_dashboard3['services'];
            $d_icons_3 = $r_dashboard3['icons'];
            $d_alt_3 = $r_dashboard3['alt'];
            $d_size_3 = $r_dashboard3['size'];
    }

    $dashboard4 = mysqli_query($conn, "SELECT * FROM dashboard where id = '4' ");
        while($r_dashboard4 = mysqli_fetch_array($dashboard4)){
            $d_services_4 = $r_dashboard4['services'];
            $d_icons_4 = $r_dashboard4['icons'];
            $d_alt_4 = $r_dashboard4['alt'];
            $d_size_4 = $r_dashboard4['size'];
    }


    $dashboard5 = mysqli_query($conn, "SELECT * FROM dashboard where id = '5' ");
        while($r_dashboard5 = mysqli_fetch_array($dashboard5)){
            $d_services_5 = $r_dashboard5['services'];
            $d_icons_5 = $r_dashboard5['icons'];
            $d_alt_5 = $r_dashboard5['alt'];
            $d_size_5 = $r_dashboard5['size'];
    }

    $dashboard6 = mysqli_query($conn, "SELECT * FROM dashboard where id = '6' ");
        while($r_dashboard6 = mysqli_fetch_array($dashboard6)){
            $d_services_6 = $r_dashboard6['services'];
            $d_icons_6 = $r_dashboard6['icons'];
            $d_alt_6 = $r_dashboard6['alt'];
            $d_size_6 = $r_dashboard6['size'];
    }


    /*Menu CALL*/
        $menu1 = mysqli_query($conn, "SELECT * FROM menu where id = '1' ");
            while($r_menu1 = mysqli_fetch_array($menu1)){
                $menu_text_1 = $r_menu1['menu_text'];
                $menu_alt_1 = $r_menu1['menu_alt'];
        }

        $menu2 = mysqli_query($conn, "SELECT * FROM menu where id = '2' ");
            while($r_menu2 = mysqli_fetch_array($menu2)){
                $menu_text_2 = $r_menu2['menu_text'];
                $menu_alt_2 = $r_menu2['menu_alt'];
        }

        $menu3 = mysqli_query($conn, "SELECT * FROM menu where id = '3' ");
            while($r_menu3 = mysqli_fetch_array($menu3)){
                $menu_text_3 = $r_menu3['menu_text'];
                $menu_alt_3 = $r_menu3['menu_alt'];
        }

        $menu4 = mysqli_query($conn, "SELECT * FROM menu where id = '4' ");
            while($r_menu4 = mysqli_fetch_array($menu4)){
                $menu_text_4 = $r_menu4['menu_text'];
                $menu_alt_4 = $r_menu4['menu_alt'];
        }

        $menu5 = mysqli_query($conn, "SELECT * FROM menu where id = '5' ");
            while($r_menu5 = mysqli_fetch_array($menu5)){
                $menu_text_5 = $r_menu5['menu_text'];
                $menu_alt_5 = $r_menu5['menu_alt'];
        }

        $menu6 = mysqli_query($conn, "SELECT * FROM menu where id = '6' ");
            while($r_menu6 = mysqli_fetch_array($menu6)){
                $menu_text_6 = $r_menu6['menu_text'];
                $menu_alt_6 = $r_menu6['menu_alt'];
        }
?>
    
<?php
    /* TRANSACTIONS MONEY */
    $transaction = mysqli_query($conn, "SELECT * FROM transactions WHERE user_logger = '$c_user'  ");
        while($r_transaction = mysqli_fetch_array($transaction)){
            $last_transaction = $r_transaction['charges'];
            $service_type = $r_transaction['service_type'];
            $last_trans_date = $r_transaction['t_date'];
    }

    /* FOR ANALYTICS GRAPHS */
    $bulkSMS_t = mysqli_query($conn, "SELECT * FROM transactions WHERE service_type = 'bulkSMS' ");
        while($r_bulkSMS_t = mysqli_fetch_array($bulkSMS_t)){
            $num_bulkSMS_t = $r_bulkSMS_t['service_type'];
    }

    $airtime_t = mysqli_query($conn, "SELECT * FROM transactions WHERE service_type = 'Airtime' ");
        while($r_airtime_t = mysqli_fetch_array($airtime_t)){
            $num_airtime_t = $r_airtime_t['service_type'];
    }

    $TV_sub_t = mysqli_query($conn, "SELECT * FROM transactions WHERE service_type = 'TV Subscription' ");
        while($r_TV_sub_t = mysqli_fetch_array($TV_sub_t)){
            $num_TV_sub_t = $r_TV_sub_t['service_type'];
    }

    $data_3g_sub_t = mysqli_query($conn, "SELECT * FROM transactions WHERE service_type = '3G data subscription' ");
        while($r_data_3g_sub_t = mysqli_fetch_array($data_3g_sub_t)){
            $num_data_3g_sub_t = $r_data_3g_sub_t['service_type'];
    }

    $elect_bills_t = mysqli_query($conn, "SELECT * FROM transactions WHERE service_type = 'electricity bills' ");
        while($r_elect_bills_t = mysqli_fetch_array($elect_bills_t)){
            $num_elect_bills_t = $r_elect_bills_t['service_type'];
    }

    $smile_t = mysqli_query($conn, "SELECT * FROM transactions WHERE service_type = 'smile' ");
        while($r_smile_t = mysqli_fetch_array($smile_t)){
            $num_smile_t = $r_smile_t['service_type'];
    }


    /*USER_LOGIN DATABASE */ /* USED FOR PROFILE */
    $users = mysqli_query($conn, "SELECT * FROM user_login where username = '$c_user' ");
        while($r_users = mysqli_fetch_array($users)){
            $username = $r_users['username'];
            $passkey = $r_users['passkey'];
            $c_passkey = $r_users['c_passkey'];
            $email = $r_users['email'];
            $c_email = $r_users['c_email'];
            $contact = $r_users['contact'];
            $c_contact = $r_users['c_contact'];
            $status = $r_users['status'];
            $balance = $r_users['balance'];
            $location = $r_users['u_location'];
    }

    $no_of_users = mysqli_query($conn, "SELECT * FROM user_login ");
        while($r_no_of_users = mysqli_fetch_array($no_of_users)){
            $distinct_username = $r_no_of_users['username'];
            $category_of_location = $r_no_of_users['u_location'];
        }

    /*PAYMENT OR FUND WALLET */
    $sql_count = "SELECT COUNT(amount) FROM payment";
    $result_sql_count =  mysqli_query($conn, $sql_count);
    //print_r($count);

    $payment = mysqli_query($conn, "SELECT * FROM payment where user_logger= '$c_user' ");
        while($r_payment = mysqli_fetch_array($payment)){
            $lastPay = $r_payment['amount'];
            $appstate = $r_payment['approval'];
    }

    /* AIRTIME DATABASE CALL */
    $network1 = mysqli_query($conn, "SELECT * FROM airtime where network = 'mtn' ");
        while($r_network1 = mysqli_fetch_array($network1)){
            $mtn = $r_network1['network'];
        }

        $network2 = mysqli_query($conn, "SELECT * FROM airtime where network = 'airtel' ");
        while($r_network2 = mysqli_fetch_array($network2)){
            $airtel = $r_network2['network'];
        }

        $network3 = mysqli_query($conn, "SELECT * FROM airtime where network = 'etisalat' ");
        while($r_network3 = mysqli_fetch_array($network3)){
            $etisalat = $r_network3['network'];
        }

        $network4 = mysqli_query($conn, "SELECT * FROM airtime where network = 'glo' ");
        while($r_network4 = mysqli_fetch_array($network4)){
            $glo = $r_network4['network'];
        }

        $network5 = mysqli_query($conn, "SELECT * FROM airtime where network = 'Starcomms' ");
        while($r_network5 = mysqli_fetch_array($network5)){
            $starcomms = $r_network5['network'];
        }

    /*DATASUB DATABASE CALL */
    $data_network1 = mysqli_query($conn, "SELECT * FROM datasub where network = 'mtn' ");
        while($r_data_network1 = mysqli_fetch_array($data_network1)){
            $mtn_data = $r_data_network1['network'];
        }

        $data_network2 = mysqli_query($conn, "SELECT * FROM datasub where network = 'airtel' ");
        while($r_data_network2 = mysqli_fetch_array($data_network2)){
            $airtel_data = $r_data_network2['network'];
        }

        $data_network3 = mysqli_query($conn, "SELECT * FROM datasub where network = 'etisalat' ");
        while($r_data_network3 = mysqli_fetch_array($data_network3)){
            $etisalat_data = $r_data_network3['network'];
        }

        $data_network4 = mysqli_query($conn, "SELECT * FROM datasub where network = 'glo' ");
        while($r_data_network4 = mysqli_fetch_array($data_network4)){
            $glo_data = $r_data_network4['network'];
        }
    $data_network5 = mysqli_query($conn, "SELECT * FROM datasub where network = 'starcomms' ");
        while($r_data_network5 = mysqli_fetch_array($data_network5)){
            $starcomms_data = $r_data_network5['network'];
        }

    /*footer CALL*/

        $footer1 = mysqli_query($conn, "SELECT * FROM footer where id='1' ");
            while($r_footer1 = mysqli_fetch_array($footer1)){
                $f_h1_1 = $r_footer1['h1'];
                $f_links_1 = $r_footer1['links'];
                $f_icons_1 = $r_footer1['icons'];
                $f_alt_1 = $r_footer1['alt'];
                $f_size_1 = $r_footer1['size'];
        }

        $footer2 = mysqli_query($conn,"SELECT * FROM footer where id='2' ");
        while($r_footer2 = mysqli_fetch_array($footer2)){
            $f_h1_2 = $r_footer2['h1'];
            $f_links_2 = $r_footer2['links'];
            $f_icons_2 = $r_footer2['icons'];
            $f_alt_2 = $r_footer2['alt'];
            $f_size_2 = $r_footer2['size'];
        }

        $footer3 = mysqli_query($conn,"SELECT * FROM footer where id='3' ");
        while($r_footer3 = mysqli_fetch_array($footer3)){
            $f_h1_3 = $r_footer3['h1'];
            $f_links_3 = $r_footer3['links'];
            $f_icons_3 = $r_footer3['icons'];
            $f_alt_3 = $r_footer3['alt'];
            $f_size_3 = $r_footer3['size'];
        }

        $footer4 = mysqli_query($conn,"SELECT * FROM footer where id='4' ");
        while($r_footer4 = mysqli_fetch_array($footer4)){
            $f_h1_4 = $r_footer4['h1'];
            $f_links_4 = $r_footer4['links'];
            $f_icons_4 = $r_footer4['icons'];
            $f_alt_4 = $r_footer4['alt'];
            $f_size_4 = $r_footer4['size'];
        }

        $footer5 = mysqli_query($conn,"SELECT * FROM footer where id='5' ");
        while($r_footer5 = mysqli_fetch_array($footer5)){
            $f_h1_5 = $r_footer5['h1'];
            $f_links_5 = $r_footer5['links'];
            $f_icons_5 = $r_footer5['icons'];
            $f_alt_5 = $r_footer5['alt'];
            $f_size_5 = $r_footer5['size'];
        }

        $footer6 = mysqli_query($conn,"SELECT * FROM footer where id='6' ");
        while($r_footer6 = mysqli_fetch_array($footer6)){
            $f_h1_6 = $r_footer6['h1'];
            $f_links_6 = $r_footer6['links'];
            $f_icons_6 = $r_footer6['icons'];
            $f_alt_6 = $r_footer6['alt'];
            $f_size_6 = $r_footer6['size'];
        }

        $footer7 = mysqli_query($conn,"SELECT * FROM footer where id='7' ");
        while($r_footer7 = mysqli_fetch_array($footer7)){
            $f_h1_7 = $r_footer7['h1'];
            $f_links_7 = $r_footer7['links'];
            $f_icons_7 = $r_footer7['icons'];
            $f_alt_7 = $r_footer7['alt'];
            $f_size_7 = $r_footer7['size'];
        }

        $footer8 = mysqli_query($conn,"SELECT * FROM footer where id='8' ");
        while($r_footer8 = mysqli_fetch_array($footer8)){
            $f_h1_8 = $r_footer8['h1'];
            $f_links_8 = $r_footer8['links'];
            $f_icons_8 = $r_footer8['icons'];
            $f_alt_8 = $r_footer8['alt'];
            $f_size_8 = $r_footer8['size'];
        }

?>