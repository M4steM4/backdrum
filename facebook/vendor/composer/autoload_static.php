<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita190b004648228899f7b8dbdd1e40e5e
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'F' => 
        array (
            'Facebook\\InstantArticles\\' => 25,
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Facebook\\InstantArticles\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/facebook-instant-articles-sdk-php/src/Facebook/InstantArticles',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Logger' => __DIR__ . '/..' . '/apache/log4php/src/main/php/Logger.php',
        'LoggerAppender' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerAppender.php',
        'LoggerAppenderConsole' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderConsole.php',
        'LoggerAppenderDailyFile' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderDailyFile.php',
        'LoggerAppenderEcho' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderEcho.php',
        'LoggerAppenderFile' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderFile.php',
        'LoggerAppenderFirePHP' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderFirePHP.php',
        'LoggerAppenderMail' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderMail.php',
        'LoggerAppenderMailEvent' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderMailEvent.php',
        'LoggerAppenderMongoDB' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderMongoDB.php',
        'LoggerAppenderNull' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderNull.php',
        'LoggerAppenderPDO' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderPDO.php',
        'LoggerAppenderPhp' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderPhp.php',
        'LoggerAppenderPool' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerAppenderPool.php',
        'LoggerAppenderRollingFile' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderRollingFile.php',
        'LoggerAppenderSocket' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderSocket.php',
        'LoggerAppenderSyslog' => __DIR__ . '/..' . '/apache/log4php/src/main/php/appenders/LoggerAppenderSyslog.php',
        'LoggerAutoloader' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerAutoloader.php',
        'LoggerConfigurable' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerConfigurable.php',
        'LoggerConfigurationAdapter' => __DIR__ . '/..' . '/apache/log4php/src/main/php/configurators/LoggerConfigurationAdapter.php',
        'LoggerConfigurationAdapterINI' => __DIR__ . '/..' . '/apache/log4php/src/main/php/configurators/LoggerConfigurationAdapterINI.php',
        'LoggerConfigurationAdapterPHP' => __DIR__ . '/..' . '/apache/log4php/src/main/php/configurators/LoggerConfigurationAdapterPHP.php',
        'LoggerConfigurationAdapterXML' => __DIR__ . '/..' . '/apache/log4php/src/main/php/configurators/LoggerConfigurationAdapterXML.php',
        'LoggerConfigurator' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerConfigurator.php',
        'LoggerConfiguratorDefault' => __DIR__ . '/..' . '/apache/log4php/src/main/php/configurators/LoggerConfiguratorDefault.php',
        'LoggerException' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerException.php',
        'LoggerFilter' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerFilter.php',
        'LoggerFilterDenyAll' => __DIR__ . '/..' . '/apache/log4php/src/main/php/filters/LoggerFilterDenyAll.php',
        'LoggerFilterLevelMatch' => __DIR__ . '/..' . '/apache/log4php/src/main/php/filters/LoggerFilterLevelMatch.php',
        'LoggerFilterLevelRange' => __DIR__ . '/..' . '/apache/log4php/src/main/php/filters/LoggerFilterLevelRange.php',
        'LoggerFilterStringMatch' => __DIR__ . '/..' . '/apache/log4php/src/main/php/filters/LoggerFilterStringMatch.php',
        'LoggerFormattingInfo' => __DIR__ . '/..' . '/apache/log4php/src/main/php/helpers/LoggerFormattingInfo.php',
        'LoggerHierarchy' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerHierarchy.php',
        'LoggerLayout' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerLayout.php',
        'LoggerLayoutHtml' => __DIR__ . '/..' . '/apache/log4php/src/main/php/layouts/LoggerLayoutHtml.php',
        'LoggerLayoutPattern' => __DIR__ . '/..' . '/apache/log4php/src/main/php/layouts/LoggerLayoutPattern.php',
        'LoggerLayoutSerialized' => __DIR__ . '/..' . '/apache/log4php/src/main/php/layouts/LoggerLayoutSerialized.php',
        'LoggerLayoutSimple' => __DIR__ . '/..' . '/apache/log4php/src/main/php/layouts/LoggerLayoutSimple.php',
        'LoggerLayoutTTCC' => __DIR__ . '/..' . '/apache/log4php/src/main/php/layouts/LoggerLayoutTTCC.php',
        'LoggerLayoutXml' => __DIR__ . '/..' . '/apache/log4php/src/main/php/layouts/LoggerLayoutXml.php',
        'LoggerLevel' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerLevel.php',
        'LoggerLocationInfo' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerLocationInfo.php',
        'LoggerLoggingEvent' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerLoggingEvent.php',
        'LoggerMDC' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerMDC.php',
        'LoggerNDC' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerNDC.php',
        'LoggerOptionConverter' => __DIR__ . '/..' . '/apache/log4php/src/main/php/helpers/LoggerOptionConverter.php',
        'LoggerPatternConverter' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverter.php',
        'LoggerPatternConverterClass' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterClass.php',
        'LoggerPatternConverterCookie' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterCookie.php',
        'LoggerPatternConverterDate' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterDate.php',
        'LoggerPatternConverterEnvironment' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterEnvironment.php',
        'LoggerPatternConverterFile' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterFile.php',
        'LoggerPatternConverterLevel' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterLevel.php',
        'LoggerPatternConverterLine' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterLine.php',
        'LoggerPatternConverterLiteral' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterLiteral.php',
        'LoggerPatternConverterLocation' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterLocation.php',
        'LoggerPatternConverterLogger' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterLogger.php',
        'LoggerPatternConverterMDC' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterMDC.php',
        'LoggerPatternConverterMessage' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterMessage.php',
        'LoggerPatternConverterMethod' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterMethod.php',
        'LoggerPatternConverterNDC' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterNDC.php',
        'LoggerPatternConverterNewLine' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterNewLine.php',
        'LoggerPatternConverterProcess' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterProcess.php',
        'LoggerPatternConverterRelative' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterRelative.php',
        'LoggerPatternConverterRequest' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterRequest.php',
        'LoggerPatternConverterServer' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterServer.php',
        'LoggerPatternConverterSession' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterSession.php',
        'LoggerPatternConverterSessionID' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterSessionID.php',
        'LoggerPatternConverterSuperglobal' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterSuperglobal.php',
        'LoggerPatternConverterThrowable' => __DIR__ . '/..' . '/apache/log4php/src/main/php/pattern/LoggerPatternConverterThrowable.php',
        'LoggerPatternParser' => __DIR__ . '/..' . '/apache/log4php/src/main/php/helpers/LoggerPatternParser.php',
        'LoggerReflectionUtils' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerReflectionUtils.php',
        'LoggerRenderer' => __DIR__ . '/..' . '/apache/log4php/src/main/php/renderers/LoggerRenderer.php',
        'LoggerRendererDefault' => __DIR__ . '/..' . '/apache/log4php/src/main/php/renderers/LoggerRendererDefault.php',
        'LoggerRendererException' => __DIR__ . '/..' . '/apache/log4php/src/main/php/renderers/LoggerRendererException.php',
        'LoggerRendererMap' => __DIR__ . '/..' . '/apache/log4php/src/main/php/renderers/LoggerRendererMap.php',
        'LoggerRoot' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerRoot.php',
        'LoggerThrowableInformation' => __DIR__ . '/..' . '/apache/log4php/src/main/php/LoggerThrowableInformation.php',
        'LoggerUtils' => __DIR__ . '/..' . '/apache/log4php/src/main/php/helpers/LoggerUtils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita190b004648228899f7b8dbdd1e40e5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita190b004648228899f7b8dbdd1e40e5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita190b004648228899f7b8dbdd1e40e5e::$classMap;

        }, null, ClassLoader::class);
    }
}
