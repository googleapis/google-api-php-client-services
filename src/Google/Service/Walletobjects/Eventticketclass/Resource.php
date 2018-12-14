<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:58
 */

/**
 * The "eventticketclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $eventticketclass = $walletobjectsService->eventticketclass;
 *  </code>
 */
class Google_Service_Walletobjects_Eventticketclass_Resource extends Google_Service_Resource
{

    /**
     * Adds a message to the event ticket class referenced by the given class ID.
     * (eventticketclass.addmessage)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_EventTicketClassAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_EventTicketClassAddMessageResponse
     */
    public function addmessage($resourceId, Google_Service_Walletobjects_EventTicketClassAddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), "Google_Service_Walletobjects_EventTicketClassAddMessageResponse");
    }

    /**
     * Returns the event ticket class with the given class ID.
     * (eventticketclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_EventTicketClass
     */
    public function get($resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Walletobjects_EventTicketClass");
    }

    /**
     * Inserts an event ticket class with the given ID and properties.
     * (eventticketclass.insert)
     *
     * @param Google_Service_Walletobjects_EventTicketClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_EventTicketClass
     */
    public function insert(Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Walletobjects_EventTicketClass");
    }

    /**
     * Returns a list of all event ticket classes for a given issuer ID.
     * (eventticketclass.listEventticketclass)
     *
     * @param string $issuerId The ID of the issuer authorized to list classes.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Identifies the max number of results returned by a
     * list. All results are returned if maxResults isn't defined.
     * @opt_param string token Used to get the next set of results if maxResults is
     * specified, but more than maxResults classes are available in a list. For
     * example, if you have a list of 200 classes and you call list with maxResults
     * set to 20, list will return the first 20 classes and a token. Call list again
     * with maxResults set to 20 and the token to get the next 20 classes.
     * @return Google_Service_Walletobjects_EventTicketClassListResponse
     */
    public function listEventticketclass($issuerId, $optParams = array())
    {
        $params = array('issuerId' => $issuerId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Walletobjects_EventTicketClassListResponse");
    }

    /**
     * Updates the event ticket class referenced by the given class ID. This method
     * supports patch semantics. (eventticketclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_EventTicketClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_EventTicketClass
     */
    public function patch($resourceId, Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Walletobjects_EventTicketClass");
    }

    /**
     * Updates the event ticket class referenced by the given class ID.
     * (eventticketclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_EventTicketClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_EventTicketClass
     */
    public function update($resourceId, Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Walletobjects_EventTicketClass");
    }
}