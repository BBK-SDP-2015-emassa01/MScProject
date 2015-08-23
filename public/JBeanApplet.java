

import java.applet.Applet;
import java.awt.Button;
import java.awt.Color;
import java.awt.FlowLayout;
import java.awt.Graphics;
import java.awt.TextField;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;


public class JBeanApplet extends Applet implements ActionListener {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	Button okButton;
	TextField nameField;
	
	Button result1;

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

	public void actionPerformed(ActionEvent evt) {

		if (evt.getSource() == okButton) {
			repaint();
		}
		
		FakeClazz fc = new FakeClazz();
		ArrayList<String> resultArrayList = fc.writeSomething(nameField.getText());
		
		for(int i = 1; i< resultArrayList.size(); i++){
		add(new Button(resultArrayList.get(i)));
		System.out.println(i);
		}
		
	}

}
