<?php
if ( ! function_exists('getprob'))
{
    function getprob($id) 
    {
        $CI =& get_instance();
            $CI->load->model('model_rule');
        $data = $CI->model_rule->getprob($id);
        
        return $data;
        }
            
        function chek_session()
        {
            $CI= & get_instance();
            $session=$CI->session->userdata('status_login');
            if($session!='oke')
            {
                redirect('auth/login');
            }
        }


        function chek_session_login()
        {
            $CI= & get_instance();
            $session=$CI->session->userdata('status_login');
            if($session=='oke')
            {
                redirect('dashboard_user');
            } 
        }

}