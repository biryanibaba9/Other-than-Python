package edu.niu.cs.z1809837.intentexample;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class SumBack extends AppCompatActivity {


    private Button backbbtn;
    private EditText etOne, etTwo;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sum_back);
        backbbtn = (Button)findViewById(R.id.button);
        etOne = (EditText)findViewById(R.id.editText);
        etTwo = (EditText)findViewById(R.id.editText2);
        backbbtn.setOnClickListener(new View.OnClickListener() {
                                        @Override
                                        public void onClick(View view) {
                                            int num1, num2;
                                            try
                                            {
                                                num1 = Integer.parseInt(etOne.getText().toString());
                                                num2 = Integer.parseInt(etTwo.getText().toString());
                                            }
                                            catch (NumberFormatException nfe)
                                            {
                                                num1 = 0;
                                                num2 = 0;
                                            }
                                            Intent i = getIntent();
                                            int ans = num1 + num2;
                                            i.putExtra("sum",ans);
                                            setResult(RESULT_OK,i);
                                            finish();
                                        }
                                    }
        );
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        FloatingActionButton fab = (FloatingActionButton) findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Snackbar.make(view, "Replace with your own action", Snackbar.LENGTH_LONG)
                        .setAction("Action", null).show();
            }
        });
    }

}
