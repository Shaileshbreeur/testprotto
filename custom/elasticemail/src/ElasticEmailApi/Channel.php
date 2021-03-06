<?php
	namespace ElasticEmailApi; 

class Channel extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Manually add a channel to your account to group email
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name Descriptive name of the channel
     * @return string
     */
    public function Add($name) {
        return $this->sendRequest('channel/add', array(
                    'name' => $name
        ));
    }

    /**
     * Delete the channel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name The name of the channel to delete.
     */
    public function EEDelete($name) {
        return $this->sendRequest('channel/delete', array(
                    'name' => $name
        ));
    }

    /**
     * Export channels in CSV file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $channelNames List of channel names used for processing
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return File
     */
    public function ExportCsv($channelNames, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('channel/exportcsv', array(
                    'channelNames' => (count($channelNames) === 0) ? null : join(';', $channelNames),
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName
        ));
    }

    /**
     * Export channels in JSON file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $channelNames List of channel names used for processing
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return File
     */
    public function ExportJson($channelNames, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('channel/exportjson', array(
                    'channelNames' => (count($channelNames) === 0) ? null : join(';', $channelNames),
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName
        ));
    }

    /**
     * Export channels in XML file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $channelNames List of channel names used for processing
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return File
     */
    public function ExportXml($channelNames, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('channel/exportxml', array(
                    'channelNames' => (count($channelNames) === 0) ? null : join(';', $channelNames),
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName
        ));
    }

    /**
     * List all of your channels
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\Channel>
     */
    public function EEList() {
        return $this->sendRequest('channel/list');
    }

    /**
     * Rename an existing channel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name The name of the channel to update.
     * @param string $newName The new name for the channel.
     * @return string
     */
    public function Update($name, $newName) {
        return $this->sendRequest('channel/update', array(
                    'name' => $name,
                    'newName' => $newName
        ));
    }

}
