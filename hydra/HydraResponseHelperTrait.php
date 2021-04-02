<?php

/**
 * Trait HydraResponseHelperTrait
 *
 * Helper methods to get data from an Hydra JSON LD response
 *
 * http://www.hydra-cg.com/
 */
trait HydraResponseHelperTrait
{
    /**
     * Extract next page number from response
     *
     * http://www.hydra-cg.com/spec/latest/core/#hydra:next
     *
     * @param array $response
     * @return string|null
     */
    private function extractNextPage(array &$response)
    {
        if (empty($response['hydra:view']['hydra:next'])) {
            return null;
        }

        $matches = [];
        preg_match('#page=([0-9]+)#', $response['hydra:view']['hydra:next'], $matches);

        if (empty($matches[1])) {
            return null;
        }

        return (string) $matches[1];
    }

    /**
     * Extract items from response
     *
     * @param array $response
     * @return array|null
     */
    private function extractItems(array &$response)
    {
        if (empty($response['hydra:member'])) {
            return null;
        }

        return $response['hydra:member'];
    }
}
