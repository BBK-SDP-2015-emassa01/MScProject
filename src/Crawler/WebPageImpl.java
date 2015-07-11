package Crawler;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.Collections;
import java.util.HashSet;
import java.util.Set;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author Esha
 */
public class WebPageImpl implements WebPage {

    private final URL URL;
    private final Set<URL> links;
    private final Set<String> linksString;
    private Set<String> emails;

    public WebPageImpl(URL url) {
        this.links = new HashSet<URL>();
        this.linksString = new HashSet<String>();
        this.emails = new HashSet<String>();
        this.URL = url;
    }

    @Override
    public String getUrl() {
        return this.URL.toString();

    }

    @Override
    public Set<URL> getLinks() {
        return Collections.unmodifiableSet(links);
    }

    @Override
    public Set<String> getEmails() {
        return Collections.unmodifiableSet(emails);
    }

    public void scanForWebpages() {
        BufferedReader in = null;

        try {
            InputStream newStream = URL.openStream();
            in = new BufferedReader(new InputStreamReader(newStream));
            String inputLine;
            String address = "";
            while ((inputLine = in.readLine()) != null) {
                Matcher m = Pattern.compile("\\b(?<=(href=\"))[^\"]*?(?=\")").matcher(inputLine);
                while (m.find()) {
                    address = m.group();
                
                URL addr=new URL(address);
                links.add(addr);
                
                linksString.add(address);
                }
            }
        } catch (IOException ex) {
           // Logger.getLogger(SpamBotImpl.class.getName()).log(Level.SEVERE, null, ex);
        } finally {
            try {
                in.close();
            } catch (IOException ex) {
               // Logger.getLogger(WebPageImpl.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
    
    public void scanForEmails() {
        BufferedReader in = null;

        try {
            InputStream newStream = URL.openStream();
            in = new BufferedReader(new InputStreamReader(newStream));
            String inputLine;
            String address = "";
            while ((inputLine = in.readLine()) != null) {
                Matcher m = Pattern.compile("[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\\.[a-zA-Z0-9-.]+").matcher(inputLine);
                while (m.find()) {
                    address = m.group();
                }
                emails.add(address);
            }
        } catch (IOException ex) {
            Logger.getLogger(SpamBotImpl.class.getName()).log(Level.SEVERE, null, ex);
        } finally {
            try {
                in.close();
            } catch (IOException ex) {
                Logger.getLogger(WebPageImpl.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    public static void main(String[] args) throws MalformedURLException {

        WebPage webPage = new WebPageImpl(new URL("https://www.google.co.uk/webhp?ie=UTF-8&rct=j&gws_rd=cr&ei=OqrxVOaLFoGhUO6YgfgI#q=esha+massand"));
        webPage.scanForWebpages();
        webPage.scanForEmails();

        for (Object current : (webPage.getLinks())) {
            System.out.println(current.toString());
        }

       /* for (Object current : (webPage.getEmails())) {
            System.out.println(current.toString());
        }
*/
    }



}
