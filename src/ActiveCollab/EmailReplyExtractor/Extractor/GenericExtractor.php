<?php
  namespace ActiveCollab\EmailReplyExtractor\Extractor;

  /**
   * @package ActiveCollab\EmailReplyExtractor\Extractor
   */
  final class GenericExtractor extends Extractor
  {
    public static function toPlainText($html)
    {
      $html = str_replace('div', 'p', $html);

      return parent::toPlainText($html);
    }

    /**
     * Return splitters
     *
     * @return array
     */
    protected function getOriginalMessageSplitters()
    {
      return array_merge(parent::getOriginalMessageSplitters(), [
        '/\-------------------------/is',
      ]);
    }
  }