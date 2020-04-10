<?php
/**
 * Jobify Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Jobify Child 1.0.0
 */


// Add field to admin
add_filter( 'resume_manager_resume_fields', 'wpjms_admin_resume_form_fields' );
function wpjms_admin_resume_form_fields( $fields ) {
	
  	$fields['age'] = array(
	    'label' 		=> __( 'Age', 'job_manager' ),
	    'type' => 'text',
 		'placeholder' => 'Your age',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 2
	);
  
	$fields['nationality'] = array(
	    'label' 		=> __( 'Nationality *', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('South Africa' => 'South Africa','Zimbabwe' => 'Zimbabwe','USA'=>'USA', 'Canada'=>'Canada', 'UK'=>'UK','Australian'=>'Australian', 'Other'=>'Other'),
	    'placeholder' => 'Your nationality',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 3
	);

    $fields['degree'] = array(
	    'label' 		=> __( 'Bachelor\'s Degree or Higher *', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('Yes'=>'Yes', 'No'=>'No', 'MA'=>'MA', 'PhD'=>'PhD'),
	    'placeholder' => '',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 4
	); 
  
  	$fields['teflcerts'] = array(
	    'label' 		=> __( 'TEFL, TESOL, CELTA, or DELTA certificate? *', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('Yes'=>'Yes', 'No'=>'No'),
	    'placeholder' => '',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 4
	); 
  	
  	$fields['yearsexperience'] = array(
	    'label' 		=> __( 'Teaching Experience *', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('No experience'=>'No experience', 'Less than a Year'=>'Less than a Year', '1 Year'=>'1 Year', '2 Years'=>'2 Years', '3 Years'=>'3 Years', '4 Years'=>'4 Years', '5 Years'=>'5 Years', '6+  Years'=>'6+ Years'),
	    'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 4
	); 
  
    $fields['locationinterested'] = array(
	    'label' 		=> __( 'Which cities are you interested in?', 'job_manager' ),
	    'type' => 'text',
 		'placeholder' => 'eg. "Tokyo, Japan", "Jeddah, Saudi Arabia"',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 4
	);
  
    $fields['licensedteacher'] = array(
	    'label' 		=> __( 'Are you a licenced teacher in your home country', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('0'=>'No', '1'=>'Yes'),
	    'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 4
	); 
  
  	$fields['skypeid'] = array(
	    'label' 		=> __( 'Skype ID', 'job_manager' ),
	    'type' => 'text',
 		'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 5
	); 
  
  	$fields['mobile'] = array(
	    'label' 		=> __( 'Mobile / Whatsapp', 'job_manager' ),
	    'type' => 'text',
 		'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 5
	);
  	
  	$fields['wechat'] = array(
	    'label' 		=> __( 'WeChat', 'job_manager' ),
	    'type' => 'text',
 		'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 5
	);
  
  	$fields['idpassport'] = array(
	    'label' 		=> __( 'Passport/ID (to verify nationality and date of birth)', 'job_manager' ),
	    'type' => 'file',
 		'placeholder' => '',
	    'required' => false,
	    'description'	=> 'Max. file size: 4 MB',
	    'priority' => 14
	);	
  
  	$fields['teachingcertificate'] = array(
	    'label' 		=> __( 'TEFL Certificate / Teaching Licence', 'job_manager' ),
	    'type' => 'file',
 		'placeholder' => '',
	    'required' => false,
	    'description'	=> 'Max. file size: 4 MB',
	    'priority' => 14
	);	
  
	return $fields;
	
}

// Add field to frontend
add_filter( 'submit_resume_form_fields', 'wpjms_frontend_resume_form_fields' );
function wpjms_frontend_resume_form_fields( $fields ) {

	$fields['resume_fields']['aliasname'] = array(
	    'label' 		=> __( 'Alias', 'job_manager' ),
	    'type' => 'text',
 		'placeholder' => 'Alias',
	    'required' => false,
	    'description'	=> 'Auto generated',
	    'priority' => 1
	);

	$fields['resume_fields']['nationality'] = array(
	    'label' 		=> __( 'Nationality', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('South Africa' => 'South Africa','Zimbabwe' => 'Zimbabwe','USA'=>'USA', 'Canada'=>'Canada', 'UK'=>'UK','Australian'=>'Australian', 'Other'=>'Other'),
	    'placeholder' => 'Your nationality',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 3
	);

	$fields['resume_fields']['idpassport'] = array(
	    'label' 		=> __( 'ID/Passport', 'job_manager' ),
	    'type' => 'number',
 		'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 3
	);
    
	$fields['resume_fields']['career'] = array(
	    'label' 		=> __( 'Which job best describes you', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('Developer' => 'Developer','QA' => 'QA','Data Scientist'=>'Data Scientist', 'Devops Engineer'=>'Devops Engineer', 'IT Admin'=>'IT Admin', 'Other'=>'Other'),
	    'placeholder' => 'I am a...',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 3
	);


	$fields['resume_fields']['locationinterested'] = array(
	    'label' 		=> __( 'Which cities are you interested in?', 'job_manager' ),
	    'type' => 'text',
 		'placeholder' => 'eg. "Cape Town", "Johannesburg"',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 4
	);
  
     	$fields['resume_fields']['degree'] = array(
	    'label' 		=> __( 'Bachelor\'s Degree or Higher?', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('Yes'=>'Yes', 'No'=>'No', 'MA'=>'MA', 'PhD'=>'PhD'),
	    'placeholder' => '',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 5
	);
  
  	$fields['resume_fields']['teflcerts'] = array(
	    'label' 		=> __( 'TEFL, TESOL, CELTA, or DELTA certificate? *', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('Yes'=>'Yes', 'No'=>'No'),
	    'placeholder' => '',
	    'required' => true,
	    'description'	=> '',
	    'priority' => 5
	);
  
  	$fields['resume_fields']['yearsexperience'] = array(
	    'label' 		=> __( 'Teaching Experience', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('No experience'=>'No experience', 'Less than a Year'=>'Less than a Year', '1 Year'=>'1 Year', '2 Years'=>'2 Years', '3 Years'=>'3 Years', '5 Years'=>'5 Years', '6+  Years'=>'6+ Years'),
	    'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 5
	); 
  
    
  
  	$fields['resume_fields']['licensedteacher'] = array(  
	    'label' 		=> __( 'Are you a licenced teacher in your home country', 'job_manager' ),
	    'type' => 'select',
 		'options' => array('0'=>'No', '1'=>'Yes'),
	    'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 5
	);
  
  	$fields['resume_fields']['mobile'] = array(
	    'label' 		=> __( 'Mobile / Whatsapp', 'job_manager' ),
	    'type' => 'text',
 		'placeholder' => '',
	    'required' => false,
	    'description'	=> '',
	    'priority' => 5
	);  
  	
  	
  
  	$fields['resume_fields']['teachingcertificate'] = array(
	    'label' 		=> __( 'TEFL Certificate / Teaching Licence', 'job_manager' ),
	    'type' => 'file',
 		'placeholder' => '',
	    'required' => false,
	    'description'	=> 'Max. file size: 4 MB',
	    'priority' => 14
	);	
	return $fields;
	
}

//customise existing fields
// Add your own function to filter the fields
add_filter( 'submit_resume_form_fields', 'custom_submit_resume_form_fields' );
function custom_submit_resume_form_fields( $fields ) {

    $fields['resume_fields']['candidate_location']['label'] = "Where are you living now?";
  	$fields['resume_fields']['candidate_location']['priority'] = 4;
  	$fields['resume_fields']['resume_content']['label'] = "Tell schools about yourself";
  	$fields['resume_fields']['resume_file']['label'] = "Resume File *";	
  	$fields['resume_fields']['resume_file']['required'] = true;
  	

    return $fields;
}







function jobify_child_styles() {
    wp_enqueue_style( 'jobify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'jobify_child_styles', 20 );


 /**
 * True if an the user is the author/admin OR the shared key is valie
 *
 * @return bool
 */
function resume_manager_user_can_view_personaldetails( $resume_id) {
    
    $canview = false;
    $resume   = get_post( $resume_id );

    $key = get_post_meta( $resume_id, 'share_link_key', true );
    $urlkey = "none";

    if(!empty( $_GET['key'] ))
    {
        $urlkey = $_GET['key'];
    }
    $canview = $key == $urlkey;

    if ( $resume->post_author > 0 && $resume->post_author == get_current_user_id() ) {
		$can_view = true;
    }
    
    return $canview;
}


/**
 * Get the featured image (Cobyte custom field)
 *
 * @since 3.7.0
 *
 * @param string $size
 * @return string
 */
function jobify_get_the_featured_image_url_custom( $size = 'thumbnail', $post = null ) {
	echo jobify_get_listing( $post )->get_featured_image( $size);	
}


function jobify_get_salary( $post = null ) {
    $listing = jobify_get_listing( $post );
    $post_id = $listing->get_id(); 
    $salary = get_post_meta( $post_id, '_job_salary', true );
    //echo jobify_get_listing( $post )->Id()->job_salary;	
    echo $salary;
}

add_filter( 'apply_with_resume_email_headers', 'custom_apply_with_resume_email_headers' );
function custom_apply_with_resume_email_headers($headers) {
    $headers[] = 'Content-Type: text/html'; //
    $headers[] = 'charset=utf-8';
    $headers[] = 'CC:teflrecruits@gmail.com';
    return $headers;
}

add_filter( 'apply_with_resume_email_subject', 'custom_apply_with_resume_email_subject' );
function custom_apply_with_resume_email_subject($subject) {
    $subject = 'Tech Jobs Mart | A candidate has just applied for a new Job';
    return $subject;
}


add_filter('apply_with_resume_email_message','custom_apply_with_resume_email_message', 10, 5);
function custom_apply_with_resume_email_message($messages, $userId, $job_id, $resume_id, $application_message)
{
    
    $resume_link     = get_resume_share_link( $resume_id );
    $candidate_name  = get_the_title( $resume_id );
    $candidate_email = get_post_meta( $resume_id, '_candidate_email', true );
    $candidate_photo = get_post_meta( $resume_id, '_candidate_photo', true );

    $message[] = <<<EOF
    <div style="max-width: 560px; padding: 20px; background: #ffffff; border-radius: 5px; margin: 40px auto; font-family: Open Sans,Helvetica,Arial; font-size: 15px; color: #666;">
        <div style="color: #444444; font-weight: normal;">
            <div style="text-align: center; font-weight: 600; font-size: 26px; padding: 10px 0; border-bottom: solid 3px #eeeeee; background: #2d94c8;"><img src="http://cobyte.ddns.net:8088/teflrecruits/wp-content/uploads/cropped-Transparency-logo-1.png" alt="TEFL Recruits" /></div>
            <div style="clear: both;"></div>
        </div>
        <div style="padding: 0 30px 30px 30px; border-bottom: 3px solid #eeeeee;">
            <div style="padding: 30px 0; font-size: 24px; text-align: left; line-height: 40px;">
                <p>You have received a new job application!</p>
                <p>
                    <div>$candidate_name</div>
                    <img src='$candidate_photo' style="width:200px; height: 300px"/>
                    <br/>
                    <p>They have left the following message for you:</p>
                    
                    <div style="padding:50px; background: #e4e4e4">
                        $application_message
                    </div>
                </p>
                
                <div style="padding: 10px 0 50px 0; text-align: left;">
                    <a style="background: #555555; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 3px; letter-spacing: 0.3px;" 
                        href="$resume_link">View Resume</a>
                </div>
                <div style="padding: 10px 0 50px 0; text-align: left;">
                    <a style="background: #555555; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 3px; letter-spacing: 0.3px;" 
                        href="http://cobyte.ddns.net:8088/teflrecruits/for-employers/job-dashboard/">View All Applications</a>
                </div>
                
            </div>
           
            <div style="padding: 20px;">If you have any problems, please contact us at teflrecruits@gmail.com</div>
        </div>
        <div style="color: #999; padding: 20px 30px;">
            <div>Thank you!</div>
            <div>The <a style="color: #3ba1da; text-decoration: none;" href="http://cobyte.ddns.net:8088/teflrecruits/">TEFL Recruits</a> Team</div>
        </div>
    </div>
EOF;

    return $message;

}


?>