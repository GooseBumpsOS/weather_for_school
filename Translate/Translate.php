<?php


class Translate
{
    private const DICT_NAME = 'translate_dict.yml';

    /**
     * @param string $text
     * @param string $toLang
     * @return string
     * @throws LogicException
     */
    public function trans(string $text, string $toLang): string
    {
        $yml = $this->readYml();

        if (!isset($yml[strtolower($text)])) {
            throw new LogicException('Can\'t find this text "' . $text . '" in ' . self::DICT_NAME . ' yml file');
        }

        if (!isset($yml[strtolower($text)][$toLang])) {
            throw new LogicException('Can\'t find translate for this "' . $toLang . '" lang for word' . $text);
        }

        return $yml[strtolower($text)][$toLang];
    }

    /**
     * @return array
     */
    private function readYml(): array
    {
        $yml = yaml_parse_file(getcwd() . '/Translate/' . self::DICT_NAME);
        $this->isYmlValid($yml);

        return $yml;
    }

    private function isYmlValid(array $yml): bool
    {
        //TODO make validation for this file
        return true;
    }
}