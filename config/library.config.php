<?php return [
    'factories'       => [
        'assetManager'                       => 'Phpfox\\AssetManager\\AssetManagerFactory',
        'authManager'                        => 'Phpfox\\AuthManager\\AuthManagerFactory',
        'translator'                         => 'Phpfox\\I18n\\TranslatorFactory',
        'logManager'                         => 'Phpfox\\LogManager\\LogManagerFactory',
        'mailService'                        => 'Phpfox\\MailManager\\MailServiceFactory',
        'Phpfox\\Mvc\\Responder'             => null,
        'requireJs'                          => 'Phpfox\\RequireJs\\RequireJsFactory',
        'routing'                            => 'Phpfox\\RouteManager\\RouteManagerFactory',
        'serviceManager'                     => 'Phpfox\\ServiceManager\\ServiceManagerFactory',
        'sessionManager'                     => 'Phpfox\\SessionManager\\SessionManagerFactory',
        'fileStorage'                        => 'Phpfox\\StorageManager\\FileStorageManagerFactory',
        'Phpfox\\ViewManager\\PhpRenderer'   => null,
        'Phpfox\\ViewManager\\WidgetManager' => null,
        'widgetManager'                      => 'Phpfox\\WidgetManager\\WidgetManagerFactory',
    ],
    'aliases'         => [
        'responder' => 'Phpfox\\Mvc\\Responder',
        'renderer'  => 'Phpfox\\ViewManager\\PhpRenderer',
        'widget'    => 'Phpfox\\ViewManager\\WidgetManager',
    ],
    'widgets'         => [],
    'form_elements'   => [
        'button'        => 'Phpfox\\FormManager\\Button',
        'checkbox'      => 'Phpfox\\FormManager\\Checkbox',
        'multiCheckbox' => 'Phpfox\\FormManager\\MultiCheckbox',
        'colorPicker'   => 'Phpfox\\FormManager\\ColorPicker',
        'editor'        => 'Phpfox\\FormManager\\Editor',
        'file'          => 'Phpfox\\FormManager\\FileUpload',
        'email'         => 'Phpfox\\FormManager\\Email',
        'heading'       => 'Phpfox\\FormManager\\Heading',
        'hidden'        => 'Phpfox\\FormManager\\Hidden',
        'reset'         => 'Phpfox\\FormManager\\Reset',
        'static'        => 'Phpfox\\FormManager\\StaticText',
        'submit'        => 'Phpfox\\FormManager\\Submit',
        'text'          => 'Phpfox\\FormManager\\Text',
        'textarea'      => 'Phpfox\\FormManager\\Textarea',
        'form'          => 'Phpfox\\FormManager\\Form',
        'fieldset'      => 'Phpfox\\FormManager\\Fieldset',
    ],
    'form_decorators' => [
        'button'        => 'Phpfox\\FormManager\\Button',
        'checkbox'      => 'Phpfox\\FormManager\\Checkbox',
        'multiCheckbox' => 'Phpfox\\FormManager\\MultiCheckbox',
        'colorPicker'   => 'Phpfox\\FormManager\\ColorPicker',
        'editor'        => 'Phpfox\\FormManager\\Editor',
        'file'          => 'Phpfox\\FormManager\\FileUpload',
        'email'         => 'Phpfox\\FormManager\\Email',
        'heading'       => 'Phpfox\\FormManager\\Heading',
        'hidden'        => 'Phpfox\\FormManager\\Hidden',
        'reset'         => 'Phpfox\\FormManager\\Reset',
        'static'        => 'Phpfox\\FormManager\\StaticText',
        'submit'        => 'Phpfox\\FormManager\\Submit',
        'text'          => 'Phpfox\\FormManager\\Text',
        'textarea'      => 'Phpfox\\FormManager\\Textarea',
        'form'          => 'Phpfox\\FormManager\\Form',
        'fieldset'      => 'Phpfox\\FormManager\\Fieldset',
    ],
    'events'          => [
        'onAssetManagerGetHeader' => 'Phpfox\\RequireJs\\RequireJs',
        'onAssetManagerGetFooter' => 'Phpfox\\RequireJs\\RequireJs',
    ],
];