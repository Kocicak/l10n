<?php
namespace l10n\Translator;

interface IStorage {
	/**
	 * @param \l10n\Translator\Translator $translator
	 * @return void
	 */
	public function load(Translator $translator);

	/**
	 * @param \l10n\Translator\Translator $translator
	 * @return void
	 */
	public function save(Translator $translator);

    /**
     * @param string $key $plural
     * @param integer $key $plural
     */
    public function delete($key, $plural);

    /**
     * @param string $key
     * @param string $text
     * @param integer $plural
     */
    public function saveOne($key, $text, $plural);
}
