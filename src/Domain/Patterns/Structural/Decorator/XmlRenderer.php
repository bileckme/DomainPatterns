<?php
/**
 * Created by PhpStorm.
 * User: biyi
 * Date: 2017/06/14
 * Time: 1:34 PM
 */
namespace Domain\Patterns\Structural\Decorator;

class XmlRenderer extends RendererDecorator
{

  /**
   * Render the data
   * @return string
   */
  public function renderData()
  {
      $document = new \DOMDocument();
      $data = $this->wrapped->renderData();
      $document->appendChild($document->createElement('content', $data));

      return $document->saveXML();
  }
}
