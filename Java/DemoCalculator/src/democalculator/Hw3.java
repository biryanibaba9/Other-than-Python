/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
/***********************************************
 Name : Shreyas Javvadhi
 Z-ID : Z1809837
 CSCI 680 Spring 2017
 Assignment 3
 Due: 5\26\2017
 Topics covered: Net beans , Swing GUI
 Description: To create two calculators with 4 operations one with buttons 
and other with radio buttons.
  
 *******************************************************/
//*

 
package democalculator;

import java.awt.*;
import javax.swing.*;
import java.awt.BorderLayout;
import java.awt.GridLayout;
import javax.swing.BorderFactory;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;
import javax.swing.JOptionPane;


/**
 *
 * @author shreyas
 */
public class Hw3 extends javax.swing.JFrame
  {
    private JFrame frame;
    private JTextField xfield;
    private JTextField yfield;
    private JLabel result;
    private JLabel xlabel;
    private JLabel ylabel;
    private JPanel xpanel;
    private JPanel ypanel;
    private final JButton plus;
    private final JButton minus;
    private final JButton multiply;
    private final JButton divide;
    private final JButton clear;
    private final JMenuBar menubar;
    private final JMenu menu;
    private final JMenuItem jitem;
    private final JMenuItem jitem2;
    private final JMenuItem jitem3;
    private final JMenuItem jitem4;
    private JCheckBox check;
       
    
    public Hw3()
      {
        frame = new JFrame();   //Creates a new frame.
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new BorderLayout());
        menubar = new JMenuBar();       //Creates a Menu bar.
        frame.setJMenuBar(menubar);
        menu = new JMenu("About");
        menubar.add(menu);
        jitem = new JMenuItem("People");    //Menu items.
        menu.add(jitem);
        jitem.addActionListener(new java.awt.event.ActionListener(){
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt){
                jitemActionPerformed(evt);
            }
        });
        
        jitem2 = new JMenuItem("Project");
        menu.add(jitem2);
        jitem2.addActionListener(new java.awt.event.ActionListener(){
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt1){
                jitem2ActionPerformed(evt1);
        }
        });
        
        jitem3 =new JMenuItem("Calculator 2");
        menu.add(jitem3);
        jitem3.addActionListener(new java.awt.event.ActionListener(){
                public void actionPerformed(java.awt.event.ActionEvent evt3) {
                       jitem3ActionPerformed(evt3);
        }
    });
        
        jitem4 = new JMenuItem("Exit");
        menu.add(jitem4);
        jitem4.addActionListener(new java.awt.event.ActionListener(){
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt2){
                jitem4ActionPerformed(evt2);
        }
        });
        
        
        xpanel = new JPanel();          //Panel and its components are added in this block.
        xpanel.setLayout(new GridLayout(3,2));
        xpanel.setBorder(BorderFactory.createLineBorder(Color.black));
        xpanel.setBackground(Color.CYAN);
              
        ypanel = new JPanel();
        ypanel.setLayout(new GridLayout(3,2));
        ypanel.setBorder(BorderFactory.createEtchedBorder());
        ypanel.setBackground(Color.CYAN);
        
        xlabel = new JLabel("x=");
        xlabel.setHorizontalAlignment(SwingConstants.RIGHT);
        xfield = new JTextField("0", 5);
        xpanel.add(xlabel);
        xpanel.add(xfield);
        
        ylabel = new JLabel("y=");
        ylabel.setHorizontalAlignment(SwingConstants.RIGHT);
        yfield = new JTextField("0", 5);
        xpanel.add(ylabel);
        xpanel.add(yfield);
        
        xpanel.add(new JLabel("Result ="));
        result = new JLabel("0");
        result.setFont(new Font("Arial",Font.BOLD,13));
        result.setForeground(Color.red);
        result.setBackground(Color.yellow);
        result.setOpaque(true);
        xpanel.add(result);
        frame.add(xpanel, BorderLayout.NORTH);
        frame.add(ypanel, BorderLayout.SOUTH);
        
        
        //Button actions are added here.
        plus = new JButton("Add");
        ypanel.add(plus, BorderLayout.LINE_START);
        plus.addActionListener(new java.awt.event.ActionListener(){
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt){
                plusActionPerformed(evt);
            }
        });
        
        minus = new JButton("Subtract");
        ypanel.add(minus, BorderLayout.AFTER_LINE_ENDS);
        minus.addActionListener(new java.awt.event.ActionListener(){
            public void actionPerformed(java.awt.event.ActionEvent evt){
                minusActionPerformed(evt);
            }
        });
        
        divide = new JButton("Divide");
        ypanel.add(divide, BorderLayout.AFTER_LINE_ENDS);
        divide.addActionListener(new java.awt.event.ActionListener(){
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt){
                divideActionPerformed(evt);
            }
        });
        
        multiply = new JButton("Multiply");
        ypanel.add(multiply, BorderLayout.AFTER_LINE_ENDS);
        multiply.addActionListener(new java.awt.event.ActionListener(){
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt){
                multiplyActionPerformed(evt);
            }
        });
        
        clear = new JButton("Clear");
        ypanel.add(clear, BorderLayout.AFTER_LINE_ENDS);
        clear.addActionListener(new java.awt.event.ActionListener(){
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt){
                clearActionPerformed(evt);
            }
        });
        

        frame.pack();
        frame.setVisible(true);
        
  }
    
    private void jitemActionPerformed(java.awt.event.ActionEvent evt){
      JOptionPane.showMessageDialog(null,"Name: Shreyas Javvadhi\nLetter code: JAVV");
    }
        
    private void jitem2ActionPerformed(java.awt.event.ActionEvent evt1){
        JOptionPane.showMessageDialog(null,"This project teaches us how to use Netbeans and its different components.\n"
                + "We create two different calculators.\nOne with button operations and the other with radiobutton and checkboxes.");
    }    
    
    private void jitem4ActionPerformed(java.awt.event.ActionEvent evt2){
      System.exit(0);
    }
    
    private void jitem3ActionPerformed(java.awt.event.ActionEvent evt3){
        frame = new JFrame();
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new BorderLayout());
        frame.getContentPane().setBackground(Color.LIGHT_GRAY);
               
        xpanel = new JPanel();
        xpanel.setLayout(new GridLayout(3,2));
        xpanel.setBorder(BorderFactory.createLineBorder(Color.black));
        xpanel.setBackground(Color.LIGHT_GRAY);
        
        ypanel = new JPanel();
        ypanel.setLayout(new GridLayout(3,2));
        ypanel.setBorder(BorderFactory.createEtchedBorder());
        ypanel.setBackground(Color.LIGHT_GRAY);

        xlabel = new JLabel("x=");
        xlabel.setHorizontalAlignment(SwingConstants.RIGHT);
        xfield = new JTextField("0", 5);
        xpanel.add(xlabel);
        xpanel.add(xfield);
        
        ylabel = new JLabel("y=");
        ylabel.setHorizontalAlignment(SwingConstants.RIGHT);
        yfield = new JTextField("0", 5);
        xpanel.add(ylabel);
        xpanel.add(yfield);
        
        xpanel.add(new JLabel("Result ="));
        result = new JLabel("0");
        result.setFont(new Font("Arial",Font.BOLD,13));
        result.setForeground(Color.red);
        result.setBackground(Color.yellow);
        result.setOpaque(true);
        xpanel.add(result);
        frame.add(xpanel, BorderLayout.NORTH);
        frame.add(ypanel, BorderLayout.SOUTH);
        
        check = new JCheckBox("Result in floating point");
        frame.add(check);
        check.addActionListener(new java.awt.event.ActionListener(){
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt){
             floatActionPerformed(evt);   
            }
        });
        
                
       JRadioButton plus = new JRadioButton("Add");
       plus.setActionCommand("Add");
       ypanel.add(plus, BorderLayout.AFTER_LINE_ENDS);
       plus.addActionListener(new java.awt.event.ActionListener(){
          public void actionPerformed(java.awt.event.ActionEvent evt){
              plus1ActionPerformed(evt);
          } 
       });
        
       JRadioButton minus = new JRadioButton("Subtract");
       minus.setActionCommand("Subtract");
       ypanel.add(minus, BorderLayout.AFTER_LINE_ENDS);
       minus.addActionListener(new java.awt.event.ActionListener(){
          public void actionPerformed(java.awt.event.ActionEvent evt){
              minus1ActionPerformed(evt);
          } 
       });
       
       JRadioButton multiply = new JRadioButton("Multiply");
       multiply.setActionCommand("Multiply");
       ypanel.add(multiply, BorderLayout.AFTER_LINE_ENDS);
       multiply.addActionListener(new java.awt.event.ActionListener(){
          public void actionPerformed(java.awt.event.ActionEvent evt){
              multiply1ActionPerformed(evt);
          } 
       });
       
       JRadioButton divide = new JRadioButton("Divide");
       divide.setActionCommand("Divide");
       ypanel.add(divide, BorderLayout.AFTER_LINE_ENDS);
       divide.addActionListener(new java.awt.event.ActionListener(){
          public void actionPerformed(java.awt.event.ActionEvent evt){
              divide1ActionPerformed(evt);
          } 
       });
       
       JRadioButton exit = new JRadioButton("Exit");
       exit.setActionCommand("Exit");
       ypanel.add(exit, BorderLayout.AFTER_LINE_ENDS);
       exit.addActionListener(new java.awt.event.ActionListener(){
          public void actionPerformed(java.awt.event.ActionEvent evt){
              exit1ActionPerformed(evt);
          } 
       });
       
        ButtonGroup group = new ButtonGroup();
        group.add(plus);
        group.add(minus);
        group.add(multiply);
        group.add(divide);
        group.add(exit);

        frame.pack();
        frame.setVisible(true);
        
    }
            //Radio button actions are added below.
    private void multiply1ActionPerformed(java.awt.event.ActionEvent evt)
      {
        int x = 0;
        int y = 0;

        String xText = xfield.getText();
        String yText = yfield.getText();

        try
          {
            x = Integer.parseInt(xText);
            y = Integer.parseInt(yText);
            result.setText(Integer.toString(x*y));
            
          }
        catch (NumberFormatException e)
          {
            xfield.setForeground(Color.RED);
            yfield.setForeground(Color.RED);
            
            result.setText("ERROR");
          }

        check.setSelected(false);
      }

    private void exit1ActionPerformed(java.awt.event.ActionEvent evt)
      {
        
       frame.dispose();
               
      }
    
    private void divide1ActionPerformed(java.awt.event.ActionEvent evt)
      {
        int x = 0;
        int y = 0;
        double a , b;

        String xText = xfield.getText();
        String yText = yfield.getText();

        try
          {
            x = Integer.parseInt(xText);
            y = Integer.parseInt(yText);
            if(y==0)
            result.setText("Divide by zero");
                
            else if(check.isSelected())
                {
                 a = Double.parseDouble(xText);
                 b = Double.parseDouble(yText);
                 result.setText(Double.toString(a/b));
                }
            else 
            result.setText(Integer.toString(x/y)); 
            
          }
        catch (NumberFormatException e)
          {
              xfield.setForeground(Color.RED);
            yfield.setForeground(Color.RED);         
              result.setText("ERROR");
                                      
              
          }

        check.setSelected(false);
      }
    
    private void minus1ActionPerformed(java.awt.event.ActionEvent evt)
      {
        int x = 0;
        int y = 0;

        String xText = xfield.getText();
        String yText = yfield.getText();

        try
          {
            x = Integer.parseInt(xText);
            y = Integer.parseInt(yText);
            result.setText(Integer.toString(x-y));
            check.setSelected(false);
          }
        catch (NumberFormatException e)
          {
              xfield.setForeground(Color.RED);
            yfield.setForeground(Color.RED);
            result.setText("ERROR");
            
          }

        check.setSelected(false);
      }
            //JButton actions are added here.
    private void plus1ActionPerformed(java.awt.event.ActionEvent evt)
      {
        int x = 0;
        int y = 0;

        String xText = xfield.getText();
        String yText = yfield.getText();

        try
          {
            x = Integer.parseInt(xText);
            y = Integer.parseInt(yText);
                                  
            result.setText(Integer.toString(x+y));
            
          }
        catch (NumberFormatException e)
          {
            xfield.setForeground(Color.RED);
            yfield.setForeground(Color.RED);
              result.setText("ERROR");
          }

        check.setSelected(false);
      }
    
    
    private void floatActionPerformed(java.awt.event.ActionEvent evt) {      
        float value = 0;
        int value2 = 0;
        String res = result.getText();
        value = Float.parseFloat(res); 
        value2 = (int) value;
      if(check.isSelected() == true)
      {result.setText(Float.toString(value));
      }
      else
          result.setText(Integer.toString(value2));
        
    }
    
    private void multiplyActionPerformed(java.awt.event.ActionEvent evt)
      {
        int x = 0;
        int y = 0;

        String xText = xfield.getText();
        String yText = yfield.getText();

        try
          {
            x = Integer.parseInt(xText);
            y = Integer.parseInt(yText);
            result.setText(Integer.toString(x*y));
          }
        catch (NumberFormatException e)
          {
              xfield.setForeground(Color.RED);
            yfield.setForeground(Color.RED);
            result.setText("ERROR");
          }
     
      }

    private void clearActionPerformed(java.awt.event.ActionEvent evt)
      {
        xfield.setText("0");
        yfield.setText("0");
        result.setText("0");
      }
    
    private void divideActionPerformed(java.awt.event.ActionEvent evt)
      {
        int x = 0;
        int y = 0;

        String xText = xfield.getText();
        String yText = yfield.getText();

        try
          {
            x = Integer.parseInt(xText);
            y = Integer.parseInt(yText);
            if(y==0)
                result.setText("Divide by zero");
            else
              result.setText(Integer.toString(x/y));  
          }
        catch (NumberFormatException e)
          {
             xfield.setForeground(Color.RED);
            yfield.setForeground(Color.RED);     
           result.setText("ERROR");
          
          }
       
      }
    
    private void minusActionPerformed(java.awt.event.ActionEvent evt)
      {
        int x = 0;
        int y = 0;

        String xText = xfield.getText();
        String yText = yfield.getText();

        try
          {
            x = Integer.parseInt(xText);
            y = Integer.parseInt(yText);
            result.setText(Integer.toString(x-y));
          }
        catch (NumberFormatException e)
          {
              xfield.setForeground(Color.RED);
            yfield.setForeground(Color.RED);
            result.setText("ERROR");
          }

      }
   
    private void plusActionPerformed(java.awt.event.ActionEvent evt)
      {
        int x = 0;
        int y = 0;

        String xText = xfield.getText();
        String yText = yfield.getText();

        try
          {
            x = Integer.parseInt(xText);
            y = Integer.parseInt(yText);
            result.setText(Integer.toString(x+y));
          }
        catch (NumberFormatException e)
          {
              xfield.setForeground(Color.RED);
            yfield.setForeground(Color.RED);
            result.setText("ERROR");
          }

      }
  
  }

