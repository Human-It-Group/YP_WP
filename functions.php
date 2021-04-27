<?php

function Theme_YP_customize_register( $wp_customize ) {

  	$wp_customize->add_setting( 'Tasks_name' , array(
      'default'   => __('ZADANIA AMBASADORA:', 'landing_page_YP'),
      'transport' => 'refresh',
  	));   

  	$wp_customize->add_section( 'Name_of_categories' , array(
      'title'      => __( 'Name settings', 'landing_page_YP' ),       // header main text
       'priority'   => 1,
  	));

  	$wp_customize->add_control(
    'Tasks_name',
    array(
      'label'      => __( 'Task name', 'landing_page_YP' ),
      'section'    => 'Name_of_categories',
      'settings'   => 'Tasks_name',
      'type'       =>  'text',
    )


);	$wp_customize->add_setting( 'Benefits_name' , array(
  'default'   => __('CO MOZESZ ZYSKAĆ?', 'landing_page_YP'),
  'transport' => 'refresh',
)); 
  	$wp_customize->add_control(
    'Benefits_name',
    array(
      'label'      => __( 'Benefits name', 'landing_page_YP' ),
      'section'    => 'Name_of_categories',
      'settings'   => 'Benefits_name',
      'type'       =>  'text',
    )
);
$wp_customize->add_setting( 'WhoWeAre_name' , array(
  'default'   => __('KIM JESTEŚMY?', 'landing_page_YP'),
  'transport' => 'refresh',
)); 
  	$wp_customize->add_control(
    'WhoWeAre_name',
    array(
      'label'      => __( 'WhoWeAre name', 'landing_page_YP' ),
      'section'    => 'Name_of_categories',
      'settings'   => 'WhoWeAre_name',
      'type'       =>  'text',
    )
);
$wp_customize->add_setting( 'About_us_name' , array(
  'default'   => __('CO U NAS SŁYCHAĆ?', 'landing_page_YP'),
  'transport' => 'refresh',
)); 
$wp_customize->add_control(
  'About_us_name',
  array(
    'label'      => __( 'About us name', 'landing_page_YP' ),
    'section'    => 'Name_of_categories',
    'settings'   => 'About_us_name',
    'type'       =>  'text',
  )
);
$wp_customize->add_setting( 'Ambasador_name' , array(
'default'   => __('ZOSTAŃ AMBASADOREM W YOUNG PROFESSIONALS!', 'landing_page_YP'),
'transport' => 'refresh',
)); 

$wp_customize->add_control(
  'Ambasador_name',
  array(
    'label'      => __( 'Ambasador name', 'landing_page_YP' ),
    'section'    => 'Name_of_categories',
    'settings'   => 'Ambasador_name',
    'type'       =>  'text',
  )
);

$wp_customize->add_setting( 'list_1' , array(
  'default'   => __('Jesteś studentem?', 'landing_page_YP'),
  'transport' => 'refresh',
));   

$wp_customize->add_section( 'List_header' , array(
  'title'      => __( 'List header', 'landing_page_YP' ),       // header main text
   'priority'   => 2,
));

$wp_customize->add_control(
'list_1',
array(
  'label'      => __( 'First', 'landing_page_YP' ),
  'section'    => 'List_header',
  'settings'   => 'list_1',
  'type'       =>  'text',
)
);
$wp_customize->add_setting( 'list_2' , array(
  'default'   => __('Udzielasz się w organizacjach na swojej uczelni?', 'landing_page_YP'),
  'transport' => 'refresh',
  )); 
  
$wp_customize->add_control(
  'list_2',
  array(
  'label'      => __( 'Second', 'landing_page_YP' ),
  'section'    => 'List_header',
  'settings'   => 'list_2',
  'type'       =>  'text',
)
);
  $wp_customize->add_setting( 'list_3' , array(
    'default'   => __('Chcesz pomagać innym w zdobywaniu doświadczenia zawodowego, jednocześnie zdobywając swoje własne?', 'landing_page_YP'),
    'transport' => 'refresh',
    )); 
    
    $wp_customize->add_control(
      'list_3',
      array(
        'label'      => __( 'Third', 'landing_page_YP' ),
        'section'    => 'List_header',
        'settings'   => 'list_3',
        'type'       =>  'text',
      )
    );
    $wp_customize->add_setting( 'text_after' , array(
      'default'   => __('Jeśli tak, to zapraszamy Cię do wzięcia udziału w naszej rekrutacji i zostania', 'landing_page_YP'),
      'transport' => 'refresh',
      )); 
      
      $wp_customize->add_control(
        'text_after',
        array(
          'label'      => __( 'Text header', 'landing_page_YP' ),
          'section'    => 'List_header',
          'settings'   => 'text_after',
          'type'       =>  'text',
        )
      );
      $wp_customize->add_setting( 'text_after_yellow' , array(
        'default'   => __(' AMBASADOREM Young Professionals.', 'landing_page_YP'),
        'transport' => 'refresh',
        )); 
        
        $wp_customize->add_control(
          'text_after_yellow',
          array(
            'label'      => __( 'Text header yellow', 'landing_page_YP' ),
            'section'    => 'List_header',
            'settings'   => 'text_after_yellow',
            'type'       =>  'text',
          )
        );

$wp_customize->add_setting( 'task_text_1' , array(
  'default'   => __('Reprezentowanie Young Professionals wśród studentów twojej uczelni.', 'landing_page_YP'),
  'transport' => 'refresh',
));   
        
$wp_customize->add_section( 'Task_text' , array(
'title'      => __( 'Tasks list', 'landing_page_YP' ),       // header main text
'priority'   => 3,
));
        
$wp_customize->add_control(
'task_text_1',
array(
  'label'      => __( '1', 'landing_page_YP' ),
  'section'    => 'Task_text',
  'settings'   => 'task_text_1',
  'type'       =>  'text',
  )
  );

$wp_customize->add_setting( 'task_text_2' , array(
  'default'   => __('Promowanie projektu na Twoich kanałach social media.', 'landing_page_YP'),
  'transport' => 'refresh',
)); 
          
$wp_customize->add_control(
  'task_text_2',
  array(
  'label'      => __( '2', 'landing_page_YP' ),
  'section'    => 'Task_text',
  'settings'   => 'task_text_2',
  'type'       =>  'text',
)
);
$wp_customize->add_setting( 'task_text_3' , array(
  'default'   => __('Pomoc znajomym w znalezieniu pracy wśród udostępnionych Ci przez nas ofert pracy.', 'landing_page_YP'),
  'transport' => 'refresh',
)); 
          
$wp_customize->add_control(
  'task_text_3',
  array(
  'label'      => __( '3', 'landing_page_YP' ),
  'section'    => 'Task_text',
  'settings'   => 'task_text_3',
  'type'       =>  'text',
)
);
$wp_customize->add_setting( 'benefit_list_1' , array(
  'default'   => __('stypendium,', 'landing_page_YP'),
  'transport' => 'refresh',
));   
        
$wp_customize->add_section( 'Benefit_text' , array(
'title'      => __( 'Benefit list', 'landing_page_YP' ),       // header main text
'priority'   => 4,
));
        
$wp_customize->add_control(
'benefit_list_1',
array(
  'label'      => __( ' - 1', 'landing_page_YP' ),
  'section'    => 'Benefit_text',
  'settings'   => 'benefit_list_1',
  'type'       =>  'text',
  )
  );

$wp_customize->add_setting( 'benefit_list_2' , array(
  'default'   => __('bonusy za każdą osobę, która z Twojego polecenia zostanie przyjęta na stanowisko pracy,', 'landing_page_YP'),
  'transport' => 'refresh',
  ));   
$wp_customize->add_control(
'benefit_list_2',
array(
  'label'      => __( ' - 2', 'landing_page_YP' ),
  'section'    => 'Benefit_text',
  'settings'   => 'benefit_list_2',
  'type'       =>  'text',
  )
  );  
$wp_customize->add_setting( 'benefit_list_3' , array(
  'default'   => __('możliwość udziału w wydarzeniach i szkoleniach firmowych,', 'landing_page_YP'),
  'transport' => 'refresh',
  ));   
$wp_customize->add_control(
'benefit_list_3',
array(
  'label'      => __( ' - 3', 'landing_page_YP' ),
  'section'    => 'Benefit_text',
  'settings'   => 'benefit_list_3',
  'type'       =>  'text',
  )
  );  
  $wp_customize->add_setting( 'benefit_list_4' , array(
    'default'   => __('możliwość uzyskania rekomendacji wśród naszych partnerów biznesowych,', 'landing_page_YP'),
    'transport' => 'refresh',
    ));   
  $wp_customize->add_control(
  'benefit_list_4',
  array(
    'label'      => __( ' - 4', 'landing_page_YP' ),
    'section'    => 'Benefit_text',
    'settings'   => 'benefit_list_4',
    'type'       =>  'text',
    )
    ); 
    $wp_customize->add_setting( 'benefit_list_5' , array(
      'default'   => __('pierwszeństwo przy rekrutacjach na stanowiska pracownicze (u nas lub naszych partnerów),', 'landing_page_YP'),
      'transport' => 'refresh',
      ));   
    $wp_customize->add_control(
    'benefit_list_5',
    array(
      'label'      => __( ' - 5', 'landing_page_YP' ),
      'section'    => 'Benefit_text',
      'settings'   => 'benefit_list_5',
      'type'       =>  'text',
      )
      );
      $wp_customize->add_setting( 'benefit_list_6' , array(
        'default'   => __('wyjątkowe gadżety przydatne w nauce zdalnej i nie tylko.', 'landing_page_YP'),
        'transport' => 'refresh',
        ));   
      $wp_customize->add_control(
      'benefit_list_6',
      array(
        'label'      => __( ' - 6', 'landing_page_YP' ),
        'section'    => 'Benefit_text',
        'settings'   => 'benefit_list_6',
        'type'       =>  'text',
        )
        );
$wp_customize->add_setting( 'text_whoweare1' , array(
  'default'   => __('Young Professionals to program stworzony z myślą o młodych osobach. Staramy się trafiać do ambitnych studentów, którzy są nastawieni na rozwój.', 'landing_page_YP'),
  'transport' => 'refresh',
));   
                
$wp_customize->add_section( 'Who_we_are_text' , array(
  'title'      => __( 'WhoWeAre text', 'landing_page_YP' ),       // header main text
  'priority'   => 4,
));
                
$wp_customize->add_control(
  'text_whoweare1',
  array(
  'label'      => __( '1 part', 'landing_page_YP' ),
  'section'    => 'Who_we_are_text',
  'settings'   => 'text_whoweare1',
  'type'       =>  'text',
)
);

$wp_customize->add_setting( 'text_whoweare2' , array(
  'default'   => __('Pomagamy łączyć uczelnię z biznesem, tak by każdy zainteresowany mógł spełniać się w tym, co robi.', 'landing_page_YP'),
  'transport' => 'refresh',
)); 

$wp_customize->add_control(
  'text_whoweare2',
  array(
  'label'      => __( '2 part bolt ', 'landing_page_YP' ),
  'section'    => 'Who_we_are_text',
  'settings'   => 'text_whoweare2',
  'type'       =>  'text',
)
);
$wp_customize->add_setting( 'text_ambasador' , array(
  'default'   => __('Poszukujemy ambasadorów na największych uczelniach w Polsce. Jeśli chcesz dołączyć do naszego zespołu, wypełnij formularz i daj się poznać.', 'landing_page_YP'),
  'transport' => 'refresh',
));   
                
$wp_customize->add_section( 'Ambasador' , array(
  'title'      => __( 'Ambasador text', 'landing_page_YP' ),       // header main text
  'priority'   => 4,
));
                
$wp_customize->add_control(
  'text_ambasador',
  array(
  'label'      => __( 'Text', 'landing_page_YP' ),
  'section'    => 'Ambasador',
  'settings'   => 'text_ambasador',
  'type'       =>  'text',
)
);
$wp_customize->add_setting( 'contact_1' , array(
  'default'   => __('kontakt@youngprofessionals.pl', 'landing_page_YP'),
  'transport' => 'refresh',
));   
                
$wp_customize->add_section( 'contact_section' , array(
  'title'      => __( 'Contact', 'landing_page_YP' ),       // header main text
  'priority'   => 5,
));
                
$wp_customize->add_control(
  'contact_1',
  array(
  'label'      => __( 'E-mail', 'landing_page_YP' ),
  'section'    => 'contact_section',
  'settings'   => 'contact_1',
  'type'       =>  'text',
)
);

$wp_customize->add_setting( 'contact_2' , array(
  'default'   => __('730 734 744', 'landing_page_YP'),
  'transport' => 'refresh',
));
$wp_customize->add_control(
  'contact_2',
  array(
  'label'      => __( 'Phone', 'landing_page_YP' ),
  'section'    => 'contact_section',
  'settings'   => 'contact_2',
  'type'       =>  'text',
)
);
$wp_customize->add_setting( 'name_form' , array(
  'default'   => __('Imie', 'landing_page_YP'),
  'transport' => 'refresh',
));   
                
$wp_customize->add_section( 'information_section' , array(
  'title'      => __( 'Titles form', 'landing_page_YP' ),       // header main text
  'priority'   => 6,
));
                
$wp_customize->add_control(
  'name_form',
  array(
  'label'      => __( 'Name', 'landing_page_YP' ),
  'section'    => 'information_section',
  'settings'   => 'name_form',
  'type'       =>  'text',
)
);









}



add_action('customize_register', 'Theme_YP_customize_register');





function landing_page_YP_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri());
	//wp_enqueue_script('script-name', get_template_directory_uri() ) . '/js/exameple.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery' );   
  wp_enqueue_script('hide-js', get_template_directory_uri() . '/js/hide.js', array(), null, true);
  wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array(), null, true);
}



add_action ('wp_enqueue_scripts', 'landing_page_YP_scripts')

?>