package Crawler;
import java.net.URL;
import java.util.Set;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Esha
 */
/**
* A possible interface representing a web page.
* This is only a suggestion.
*/
public interface WebPage {
/**
* Returns the URL that identifies this web page.
* @return the URL that identifies this web page.
*/
String getUrl();
/**
* Returns all the links on this webpage.
*
* Implementing classes should return a read-only view of this
* set, using Collections.unmodifiableSet().
*
* @return all the links on this webpage.
*/
Set<URL> getLinks();
/**
* Returns all the emails on this webpage.
*
* Implementing classes should return a read-only view of this
* set, using Collections.unmodifiableSet().
*
* @return all the emails on this webpage.
*/
Set<String> getEmails();
// Also, implementing classes should override equals() to
// ensure that p1.equals(p2) returns true if and only if
// p1.getUrl().equals(p2.getUrl()) returns true

void scanForWebpages();

void scanForEmails();


}

