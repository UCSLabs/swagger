<?php

namespace UCS\Swagger\Specification;

/**
 * @author Quentin Schuler <q.schuler@wakeonweb.com>
 */
class Swagger
{
    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';
    const SCHEME_WS = 'ws';
    const SCHEME_WSS = 'wss';

    /**
     * @return string[]
     */
    public static function getValidSchemes()
    {
        return [
            self::SCHEME_HTTP,
            self::SCHEME_HTTPS,
            self::SCHEME_WS,
            self::SCHEME_WSS,
        ];
    }

    /**
     * @var string
     */
    private $swagger;

    /**
     * @var Info
     */
    private $info;

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $basePath;

    /**
     * @var string[]
     */
    private $schemes;

    /**
     * @var string[]
     */
    private $consumes;

    /**
     * @var string[]
     */
    private $produces;

    /**
     * @var Paths
     */
    private $paths;

    /**
     * @var Definitions
     */
    private $definitions;

    /**
     * @var ParametersDefinitions
     */
    private $parameters;

    /**
     * @var ResponsesDefinitions
     */
    private $responses;

    /**
     * @var SecurityDefinitions
     */
    private $securityDefinitions;

    /**
     * @var SecurityRequirement[]
     */
    private $security;

    /**
     * @var Tag[]
     */
    private $tags;

    /**
     * @var ExternalDocumentation|null
     */
    private $externalDocs;

    /**
     * @param string                     $swagger
     * @param Info                       $info
     * @param string                     $host
     * @param string                     $basePath
     * @param string[]                   $schemes
     * @param string[]                   $consumes
     * @param string[]                   $produces
     * @param Paths                      $paths
     * @param Definitions                $definitions
     * @param ParametersDefinitions      $parameters
     * @param ResponsesDefinitions       $responses
     * @param SecurityDefinitions        $securityDefinitions
     * @param SecurityRequirement[]      $security
     * @param Tag[]                      $tags
     * @param ExternalDocumentation|null $externalDocs
     */
    public function __construct($swagger, Info $info, $host, $basePath, array $schemes, array $consumes, array $produces, Paths $paths, Definitions $definitions, ParametersDefinitions $parameters, ResponsesDefinitions $responses, SecurityDefinitions $securityDefinitions, array $security, array $tags, ExternalDocumentation $externalDocs = null)
    {
        $this->swagger = $swagger;
        $this->info = $info;
        $this->host = $host;
        $this->basePath = $basePath;
        $this->schemes = $schemes;
        $this->consumes = $consumes;
        $this->produces = $produces;
        $this->paths = $paths;
        $this->definitions = $definitions;
        $this->parameters = $parameters;
        $this->responses = $responses;
        $this->securityDefinitions = $securityDefinitions;
        $this->security = $security;
        $this->tags = $tags;
        $this->externalDocs = $externalDocs;
    }

    /**
     * @return string
     */
    public function getSwagger()
    {
        return $this->swagger;
    }

    /**
     * @return Info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * @return string[]
     */
    public function getSchemes()
    {
        return $this->schemes;
    }

    /**
     * @return string[]
     */
    public function getConsumes()
    {
        return $this->consumes;
    }

    /**
     * @return string[]
     */
    public function getProduces()
    {
        return $this->produces;
    }

    /**
     * @return Paths
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * @return Definitions
     */
    public function getDefinitions()
    {
        return $this->definitions;
    }

    /**
     * @return ParametersDefinitions
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @return ResponsesDefinitions
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * @return SecurityDefinitions
     */
    public function getSecurityDefinitions()
    {
        return $this->securityDefinitions;
    }

    /**
     * @return SecurityRequirement[]
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * @return Tag[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return ExternalDocumentation|null
     */
    public function getExternalDocs()
    {
        return $this->externalDocs;
    }
}