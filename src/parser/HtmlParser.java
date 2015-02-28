package parser;

import java.io.IOException;
import java.io.UnsupportedEncodingException;
import java.net.URLDecoder;
import java.net.URLEncoder;

import org.jsoup.Jsoup;

public class HtmlParser {
	
	//REF: http://jsoup.org/
	
	public static void main(String[] args){
	
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
