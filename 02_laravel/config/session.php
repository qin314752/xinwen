<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |这个选项控制将使用默认的会话“司机” |请求。默认情况下,我们将使用轻量级本地司机但 |你可以指定其他很棒的司机这里提供。
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "array"
    |支持:“文件”、“饼干”、“数据库”、“apc”, |“memcached”、“复述”、“数组”
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    |在这里你可以指定的分钟数你希望会话 |可以在到期之前仍然闲置。如果你想要他们 |在浏览器上立即到期关闭,设置该选项
    */

    'lifetime' => 30,

    'expire_on_close' => true,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |这个选项允许您容易地指定,所有的会话数据 |前应该加密存储。所有加密将运行 |自动Laravel和可以使用会话像正常
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | When using the native session driver, we need a location where session
    | files may be stored. A default has been set for you but a different
    | location may be specified. This is only needed for file sessions.
    |使用本机会话司机时,我们需要一个位置 |可能存储文件。默认设置为你而不同 |位置可能被指定。这只是文件所需的会话
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |当使用“数据库”或“复述”会话的司机,你可以指定一个 |联系应该用于管理这些会话。这应该 |对应于您的数据库连接配置选项。
    */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table we
    | should use to manage the sessions. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    ||使用“数据库”会话驱动程序时,您可以指定我们的表 |应该使用管理会议。当然,一个合理的默认 |提供你;但是,您可以自由地根据需要改变这一切。 |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |一些会话司机必须手动扫描他们的存储位置 |摆脱旧会话存储。下面是它的机会 |发生在一个给定的请求。默认情况下,100年的赔率是2。
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a session
    | instance by ID. The name specified here will get used every time a
    | new session cookie is created by the framework for every driver.
    |在这里你可能会改变cookie的名称用来确定一个会话 |实例ID。这里会习惯每次一个指定的名称 |创建新会话cookie的每个司机的框架。
    */

    'cookie' => 'laravel_session',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    ||会话cookie路径决定了路径的饼干 |被认为是可用的。通常,这将是根的路径 |您的应用程序,但你可以自由地改变这个必要时
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    |在这里你可能会改变的领域使用cookie识别会话 |在您的应用程序。这将确定哪些领域饼干 |可以在您的应用程序。一个明智的默认设置。
    */

    'domain' => null,

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you if it can not be done securely.
    |通过将此选项设置为true,会话cookie只会被送回来 |服务器如果浏览器有一个HTTPS连接。这将保持 |饼干被寄给你如果不能安全地完成。 |
    */

    'secure' => false,

];
