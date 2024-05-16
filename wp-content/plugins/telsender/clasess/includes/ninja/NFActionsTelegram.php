<?php

namespace pechenki\Telsender\clasess;

if (!defined('ABSPATH')) exit;

namespace pechenki\Telsender\clasess\includes\ninja;
use pechenki\Telsender\clasess\TelegramApi;

/**
 * Class NF_Action_SuccessMessage
 */
final class NFActionsTelegram extends \NF_Abstracts_Action
{
    /**
     * @var string
     */
    protected $_name = 'Telsender';

    /**
     * @var \pechenki\Telsender\clasess\TelegramSend $telegram
     */
    private $telegram;

    /**
     * @var array
     */
    protected $_tags = array();

    /**
     * @var string
     */
    protected $_timing = 'normal';

    /**
     * @var int
     */
    protected $_priority = 13;

    /**
     * Constructor
     */
    public function __construct($telegram)
    {
        parent::__construct();


        $this->telegram = $telegram;
        $this->_nicename = "Telegram";

        $settings = [
            'telsender_token' => array(
                'name' => 'telsender_token',
                'type' => 'textbox', // 'textarea', 'number', 'toggle', etc
                'label' => esc_html__('Token', 'telsender'),
                'width' => 'full', // 'full', 'one-half', 'one-third'
                'group' => 'primary', // 'primary', 'restrictions', 'advanced'
                'value' => '',
                'help' => 'Якщо не заповнено, використовується з налаштувань Telsender ',
                'use_merge_tags' => False, // TRUE or FALSE
            ),
            'telsender_chat_id' => array(
                'name' => 'telsender_chat_id',
                'type' => 'textbox', // 'textarea', 'number', 'toggle', etc
                'label' => esc_html__('Chat id', 'telsender'),
                'width' => 'full', // 'full', 'one-half', 'one-third'
                'group' => 'primary', // 'primary', 'restrictions', 'advanced'
                'value' => '',
                'help' => 'Можна використати через кому',
                'use_merge_tags' => False, // TRUE or FALSE
            ),
            'telsender_message' => array(
                'name' => 'telsender_message',
                'type' => 'textarea', // 'textarea', 'number', 'toggle', etc
                'label' => 'Message to Telegram',
                'width' => 'full', // 'full', 'one-half', 'one-third'
                'group' => 'primary', // 'primary', 'restrictions', 'advanced'
                'value' => '',
                'help' => 'Використовується html розмітка',
                'use_merge_tags' => TRUE, // TRUE or FALSE
            ),
        ];

        $this->_settings = array_merge($this->_settings, $settings);

    }

    /**
     * @param $action_settings
     * @param $form_id
     * @param $data
     * @return void
     */
    public function process( $action_settings, $form_id, $data )
    {
        if( isset( $action_settings[ 'telsender_message' ] ) ) {
            $ms = do_shortcode( $action_settings['telsender_message'] );


            if (!empty($action_settings['telsender_token'])){
                $this->telegram->Token =  $action_settings['telsender_token'];
            }


            if (!empty($action_settings['telsender_chat_id'])){
                $this->telegram->Chat_id = $action_settings['telsender_chat_id'];
            }
            $this->telegram->SendMesage($ms);

        }

    }


}
