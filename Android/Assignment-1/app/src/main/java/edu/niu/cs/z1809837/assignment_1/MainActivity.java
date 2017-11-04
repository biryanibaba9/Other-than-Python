package edu.niu.cs.z1809837.assignment_1;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

//import edu.niu.cs.z1795447.assignment_1.R;

public class MainActivity extends AppCompatActivity {

    private TextView tipTV, totalTV;
    private EditText billTxt, tipPercTxt;
    private Button btn;
    double billAmt, tipEr, tipAmt, totalAmt;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        billTxt = (EditText)findViewById(R.id.TextBill);
        tipPercTxt = (EditText)findViewById(R.id.TextTip);
        tipTV = (TextView)findViewById(R.id.textViewTip);
        totalTV = (TextView)findViewById(R.id.textViewTotal);
        btn = (Button)findViewById(R.id.calBtn);
        btn.setOnClickListener(cal);

            }
            private View.OnClickListener cal = new View.OnClickListener()
            {

                @Override
                public void onClick(View v) {
                    billAmt = Double.parseDouble(billTxt.getText().toString());
                    tipEr = Double.parseDouble(tipPercTxt.getText().toString());
                    tipAmt = billAmt * (tipEr/100);
                    totalAmt = billAmt + tipAmt;

                    tipTV.setText(String.format("%.2f",tipAmt));
                    totalTV.setText(String.format("%.2f",totalAmt));
                }
            };



}
