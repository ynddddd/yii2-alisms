<?php
namespace silentlun\alisms\lib;

/**
 * AcsRequest.php
 * @author: allen
 * @date 2020年5月12日上午11:29:14
 * @copyright Copyright igkcms
 */
#[AllowDynamicProperties]
abstract class AcsRequest
{
    protected string $actionName = '';
    protected string $method = 'POST';
    protected string $protocolType = 'https';
    protected string $acceptFormat = 'JSON';

    protected array $queryParameters = [];
    protected array $headers = [];
    protected array $domainParameters = [];

    private ?string $version = null;
    private ?string $product = null;
    private ?string $regionId = null;
    private ?string $content = null;

    public function __construct()
    {
        $this->headers["x-sdk-client"] = "php/2.0.0";
        $this->initialize();
    }

    private function initialize(): void
    {
        $this->setMethod("POST");
        $this->setAcceptFormat("JSON");
    }

    public function getDomainParameter(): array
    {
        return $this->domainParameters;
    }

    public function putDomainParameters(string $name, $value): void
    {
        $this->domainParameters[$name] = $value;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): void
    {
        $this->product = $product;
    }

    public function getActionName(): string
    {
        return $this->actionName;
    }

    public function setActionName(string $actionName): void
    {
        $this->actionName = $actionName;
    }

    public function getAcceptFormat(): string
    {
        return $this->acceptFormat;
    }

    public function setAcceptFormat(string $acceptFormat): void
    {
        $this->acceptFormat = $acceptFormat;
    }

    public function getQueryParameters(): array
    {
        return $this->queryParameters;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function getProtocol(): string
    {
        return $this->protocolType;
    }

    public function setProtocol(string $protocol): void
    {
        $this->protocolType = $protocol;
    }

    public function getRegionId(): ?string
    {
        return $this->regionId;
    }

    public function setRegionId(string $region): void
    {
        $this->regionId = $region;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function addHeader(string $headerKey, string $headerValue): void
    {
        $this->headers[$headerKey] = $headerValue;
    }
}
