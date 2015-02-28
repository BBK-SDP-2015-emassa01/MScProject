package Crawler;


import java.net.MalformedURLException;
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
* A spambot
*/
public interface SpamBot {
/**
* Sets the seed.
*
* The seed is the very first URL that has to be given to the
* system. The associated web page is the starting point for
* the whole process of fetching web pages, extracting their
* links and email addresses, and fetching more web pages.
*
* @param seedUrl the first URL to fetch and analyst
     * @throws java.net.MalformedURLException
*/
void setSeed(String seedUrl) throws MalformedURLException;
/**
* Returns the seed URL.
* @return the seed URL.
*/
String getSeed();
/* Sets the number of threads.
*
* The user should be able to set the number of threads to be
* used for running the crawlers.
*
* @param count the number of threads (i.e. crawlers) to start in parallel
*/
void setThreads(int count);
/**
* Initiates the scanning process.
*/
void scanSite();
/**
* Returns all the email gathered.
*
* This method should be executed only after the last crawlers
* have stopped. If it is called before that point, its
* behavior is not defined.
*/
Set<String> getEMails();
}

