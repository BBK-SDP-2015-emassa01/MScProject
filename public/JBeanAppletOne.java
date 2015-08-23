import java.applet.Applet;
import java.awt.Button;
import java.awt.Color;
import java.awt.FlowLayout;
import java.awt.Graphics;
import java.awt.TextField;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;


import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;


public class JBeanAppletOne extends  Applet implements ActionListener  {
	
	private static final long serialVersionUID = 1L;
	Button okButton;
	TextField nameField;
	
	Button result1;
	
	String qry=null;
	public ArrayList<String> jSoupGoogleLinks = new ArrayList<>();
	
	String thisQuery = null;
	public ArrayList<String> jSoupYahooLinks = new ArrayList<>();
	public ArrayList<String> jSoupBingLinks = new ArrayList<>();

	public void init() {
		
		setLayout(new FlowLayout());
		okButton = new Button("Search!");
		
		
		nameField = new TextField("", 35);

		add(nameField); 
		add(okButton);

		okButton.addActionListener(this);

	}

	public void paint(Graphics g) {
		g.setColor(Color.BLACK);
		g.drawString(nameField.getText(), 50, 100);	

	}
	
	public void resizeIt(int x,int y){
		resize(x, y);
	}

	public void actionPerformed(ActionEvent evt) {

		if (evt.getSource() == okButton) {
			repaint();
		}
		
		
		
//		FakeClazz fc = new FakeClazz();
		ArrayList<String> resultArrayList = null;
		resultArrayList = writeSomething(nameField.getText());
		
		for(int i = 1; i< resultArrayList.size(); i++){
		add(new Button(resultArrayList.get(i)));
		}
		
		resizeIt(1300, 780);
		
	}
	
	public ArrayList<String> writeSomething(String q){
		String query = q.replace(" ", "+");
		thisQuery = query;

		try {
			cse();
		} catch (Exception e) {
			System.out
					.println("There was an error in the Google Custom Search method.");
			e.printStackTrace();
		}

		thisQuery = query;

		jsouphtmlYahoo();
		jsouphtmlBing();

		System.out.println("Completed 1.");

		ArrayList<String> linkArrayList = new ArrayList<>();
		for (int i = 0; i < 10; i++) {
			linkArrayList.add(jSoupYahooLinks.get(i));
			linkArrayList.add(jSoupBingLinks.get(i));
			linkArrayList.add(jSoupGoogleLinks.get(i));
		}
		System.out.println("Completed 2.");
		
		return linkArrayList;

	}
	

	public void cse() throws IOException {

	    String key="AIzaSyCnAIDiZchNkR0OTBH3NMMNt4GmRiwpdnA";//server key
	    
	    String cx = "008818185974073145685:ga_fmgk9gf0";
	    URL url = new URL(
	            "https://www.googleapis.com/customsearch/v1?key="+key+ "&cx="+ cx +"&q="+ qry + "&alt=json");
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
	    conn.setRequestMethod("GET");
	    conn.setRequestProperty("Accept", "application/json");
	    BufferedReader br = new BufferedReader(new InputStreamReader(
	            (conn.getInputStream())));

	    String output;
//	    PrintWriter writer = new PrintWriter("AllLinks.txt", "UTF-8");
//	    writer.println("Output from www.google.com/search?q="+qry+"\n");
	    while ((output = br.readLine()) != null) {

	        if(output.contains("\"link\": \"")){                
	            String link=output.substring(output.indexOf("\"link\": \"")+("\"link\": \"").length(), output.indexOf("\","));
//	            writer.println(link);       //Will print the google search links
	            jSoupGoogleLinks.add(link.toString());
	            //can also use a split here to remove the "a href" tags from answer/
	        }     
	    }
//	    writer.close();
	    conn.disconnect();                              
	}
	
	public void jsouphtmlYahoo() {

		// System.out.println("Type your search query");
		//
		// String query = new Scanner(System.in).nextLine().replace(" ", "+");
		//
		// System.out.println("Running jSoupHtmlParser on query: " + query);
		Document doc;
		try {

			String searchPage = "https://uk.search.yahoo.com/search?p=";
				String tempSearch = searchPage + thisQuery;

				// need http protocol
				doc = Jsoup.connect(tempSearch).get();

				// get page title
//				String title = doc.title();


				// yahoo = "h3.title > a"
				// bing = "h2 a"
				String selection = "h3.title > a";

				Elements links = doc.select(selection);
				
				for (Element l: links) {
					jSoupYahooLinks.add(l.toString());
				}

//				try {
//					String filename = "AllLinks.txt";
//					FileWriter fw = new FileWriter(filename, true); // the true
//																	// will
//																	// append
//																	// the new
//																	// data
//
//					fw.write("\n\nOutput from: " + searchPage + query +"\n");
//					for (Element link : links) {
//
//						// get the value from href attribute
//						// System.out.println("\ntext : "
//						// + Jsoup.parse(tempSearch).body().text());
//						fw.write(link.attr("href") + "\n");
//						// System.out.println("linkText : " + link.text());
//						// System.out.println("hasClass : " +
//						// link.hasClass("r"));
//						// System.out.println("absHref: " +
//						// link.attr("abs:href"));
//						// System.out.println("tagName : " + link.tagName());
//
//					}
//
//					fw.close();
//				} catch (IOException ioe) {
//					System.err.println("IOException: " + ioe.getMessage());
//				}

		} catch (IOException e) {
			e.printStackTrace();
		}

	
	}
	
	public void jsouphtmlBing() {

		// System.out.println("Type your search query");
		//
		// String query = new Scanner(System.in).nextLine().replace(" ", "+");
		//
		// System.out.println("Running jSoupHtmlParser on query: " + query);
		Document doc;
		try {

			String searchPage = "https://www.bing.com/search?q=" ;
			String tempSearch = searchPage + thisQuery;

				// need http protocol
				doc = Jsoup.connect(tempSearch).get();

				// get page title
				String title = doc.title();
				// System.out.println("\ntitle : " + title);

				// yahoo = "h3.title > a"
				// bing = "h2 a"
				String selection = "h2 a";
				

				Elements links = doc.select(selection);
				
				for (Element l: links) {
					jSoupBingLinks.add(l.toString());
				}

//				try {
//					String filename = "AllLinks.txt";
//					FileWriter fw = new FileWriter(filename, true); // the true
//																	// will
//																	// append
//																	// the new
//																	// data
//
//					fw.write("\n\nOutput from: " + searchPage + query +"\n");
//					for (Element link : links) {
//
//						// get the value from href attribute
//						// System.out.println("\ntext : "
//						// + Jsoup.parse(tempSearch).body().text());
//						fw.write(link.attr("href") + "\n");
//						// System.out.println("linkText : " + link.text());
//						// System.out.println("hasClass : " +
//						// link.hasClass("r"));
//						// System.out.println("absHref: " +
//						// link.attr("abs:href"));
//						// System.out.println("tagName : " + link.tagName());
//
//					}
//
//					fw.close();
//				} catch (IOException ioe) {
//					System.err.println("IOException: " + ioe.getMessage());
//				}
			

		} catch (IOException e) {
			e.printStackTrace();
		}

	}



}

