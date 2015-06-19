package parser;

import java.io.IOException;
import java.io.UnsupportedEncodingException;
import java.net.URLDecoder;
import java.net.URLEncoder;
import java.util.List;

import org.jsoup.Jsoup;

public class HtmlParser {
	
	//REF: http://jsoup.org/
	/*
	 * This is a class to parse HTML code from any URL and search for links.
	 * Can be used with any public page on the web, and may be used with the API's to check for redundancy in the links that are
	 * presented back to the user.
	 * The HTML parser will be able to check many more web-sites and integrate the results into those already selected by the custom
	 * search Yahoo API.
	 * The HTML parser will also use the Java Dictionary to produce synonyms to present similar (word) results to the user.
	 */
	
	public static void main(String[] args){
		
		String[] searchPages = {"http://www.google.com/search?q=", "https://uk.search.yahoo.com/search?p=", "https://www.bing.com/search?q="};

		
	String google = "http://www.google.com/search?q=";
	String search = "Esha Massand";
	String charset = "UTF-8";
	String userAgent = "MSc Esha's Bot v 1.0 (emassa01)"; // Change this to your company's name and bot homepage!

	org.jsoup.select.Elements links = null;
	try {
		links = Jsoup.connect(google + URLEncoder.encode(search, charset)).userAgent(userAgent).get().select("li.g>h3>a");
	} catch (UnsupportedEncodingException e1) {
		// TODO Auto-generated catch block
		e1.printStackTrace();
	} catch (IOException e1) {
		// TODO Auto-generated catch block
		e1.printStackTrace();
	}

	for (org.jsoup.nodes.Element link : links) {
	    String title = link.text();
	    String url = link.absUrl("href"); // Google returns URLs in format "http://www.google.com/url?q=<url>&sa=U&ei=<someKey>".
	    try {
			url = URLDecoder.decode(url.substring(url.indexOf('=') + 1, url.indexOf('&')), "UTF-8");
		} catch (UnsupportedEncodingException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	    if (!url.startsWith("http")) {
	        continue; // Ads/news/etc.
	    }

	    System.out.println("Title: " + title);
	    System.out.println("URL: " + url);
	}
	}

}