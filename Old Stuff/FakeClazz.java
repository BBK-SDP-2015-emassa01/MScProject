

import java.util.ArrayList;

public class FakeClazz {
	
	public ArrayList<String> writeSomething(String q){
		String query = q.replace(" ", "+");
		GoogleCustomSearchApiApplet gcse = new GoogleCustomSearchApiApplet();
		gcse.qry = query;

		try {
			gcse.cse();
		} catch (Exception e) {
			System.out
					.println("There was an error in the Google Custom Search method.");
			e.printStackTrace();
		}

		JsoupHtmlParserApplet jshtml = new JsoupHtmlParserApplet();
		jshtml.query = query;

		jshtml.jsouphtmlYahoo();
		jshtml.jsouphtmlBing();

		System.out.println("Completed 1.");

		ArrayList<String> linkArrayListYahoo = jshtml.jSoupYahooLinks;
		ArrayList<String> linkArrayListBing = jshtml.jSoupBingLinks;
		ArrayList<String> linkArrayListGoogle = gcse.jSoupGoogleLinks;

		ArrayList<String> linkArrayList = new ArrayList<>();
		for (int i = 0; i < 10; i++) {
			linkArrayList.add(linkArrayListYahoo.get(i));
			linkArrayList.add(linkArrayListBing.get(i));
			linkArrayList.add(linkArrayListGoogle.get(i));
		}
		System.out.println("Completed 2.");
		
		return linkArrayList;
	
//		PrintWriter writer = null;
//		try {
//			writer = new PrintWriter("AllLinks.txt", "UTF-8");
//		} catch (FileNotFoundException | UnsupportedEncodingException e) {
//			// TODO Auto-generated catch block
//			e.printStackTrace();
//		}
//		writer.println("Output from Google, Yahoo and Bing, for query: "
//				+ query);
//		while (!linkArrayList.isEmpty()) {
//			writer.println(linkArrayList.get(0)+"\n");
//			linkArrayList.remove(0);
//		}
//		writer.close();
	}
	}


