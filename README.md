php bin/composer require symfony/assetic-bundle

dans config.yml
<pre>
assetic:
    debug:          '%kernel.debug%'
    use_controller: '%kernel.debug%'
    filters:
        cssrewrite: ~
    assets:
#        images des css
        font-awesome-otf:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/layouts/layout/img/sidebar_toggler_icon_darkblue.png'
            output: 'assets/layouts/layout/img/sidebar_toggler_icon_darkblue.png'

        font-awesome-otf:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/font-awesome/fonts/FontAwesome.otf'
            output: 'assets/global/plugins/font-awesome/css/fonts/FontAwesome.otf'
        font-awesome-eot:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/font-awesome/fonts/fontawesome-webfont.eot'
            output: 'assets/global/plugins/font-awesome/css/fonts/fontawesome-webfont.eot'
        font-awesome-svg:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/font-awesome/fonts/fontawesome-webfont.svg'
            output: 'assets/global/plugins/font-awesome/css/fonts/fontawesome-webfont.svg'
        font-awesome-ttf:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/font-awesome/fonts/fontawesome-webfont.ttf'
            output: 'assets/global/plugins/font-awesome/css/fonts/fontawesome-webfont.ttf'
        font-awesome-woff:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/font-awesome/fonts/fontawesome-webfont.woff'
            output: 'assets/global/plugins/font-awesome/css/fonts/fontawesome-webfont.woff'

        simple-line-icons-otf:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/simple-line-icons/fonts/Simple-Line-Icons.dev.svg'
            output: 'assets/global/plugins/simple-line-icons/fonts/Simple-Line-Icons.dev.svg'
        simple-line-icons-eot:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/simple-line-icons/fonts/Simple-Line-Icons.eot'
            output: 'assets/global/plugins/simple-line-icons/fonts/fonts/Simple-Line-Icons.eot'
        simple-line-icons-svg:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/simple-line-icons/fonts/Simple-Line-Icons.svg'
            output: 'assets/global/plugins/simple-line-icons/fonts/fonts/Simple-Line-Icons.svg'
        simple-line-icons-ttf:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/simple-line-icons/fonts/Simple-Line-Icons.ttf'
            output: 'assets/global/plugins/simple-line-icons/fonts/fonts/Simple-Line-Icons.ttf'
        simple-line-icons-woff:
            inputs: '%kernel.root_dir%/../src/AppBundle/BackBundle/Resources/public/assets/global/plugins/simple-line-icons/fonts/Simple-Line-Icons.woff'
            output: 'assets/global/plugins/simple-line-icons/fonts/Simple-Line-Icons.woff'
</pre>
