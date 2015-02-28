package Crawler;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Map;
import java.util.Set;
import java.util.concurrent.Callable;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import java.util.logging.Level;
import java.util.logging.Logger;

 /** To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

*/


public class SpamBotImpl implements SpamBot{
    
    private URL seedURL;
    private Map<URL, Boolean> allLinks;
    private Set<String> allEmails;

    public SpamBotImpl(){
        seedURL=null;
        allLinks=new HashMap<URL, Boolean>();
        allEmails=new HashSet<String>();
    }

    @Override
    public void setSeed(String seedUrl) throws MalformedURLException {

        throw new MalformedURLException("Not a good URL."); 
    }

    @Override
    public String getSeed() {
        return this.seedURL.toString();
    }

    @Override
    public void scanSite() {
 
    }

    @Override
    public void setThreads(int count) {
        ExecutorService executor= Executors.newFixedThreadPool(count);
        executor.submit(new Crawler(getNextNotVisitedURL()));

            }

 @Override
 //needs to run only after all the crawlers have stopped
    public Set<String> getEMails() {
        return allEmails;
    }

    public synchronized URL getNextNotVisitedURL(){
        URL url=null;
        for (Map.Entry<URL, Boolean> entry : allLinks.entrySet()){
            if(!entry.getValue()){
                url=entry.getKey();
                allLinks.put(entry.getKey(), true);
            }
        }
        return url;
    }

 public static void main(){


 }

}
