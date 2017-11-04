package edu.niu.cs.z1809837.texttospeech;

import android.content.ActivityNotFoundException;
import android.content.Intent;
import android.speech.RecognizerIntent;
import android.speech.tts.TextToSpeech;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Locale;

public class MainActivity extends AppCompatActivity {

    private static final int CODE_A = 1;
    private Button btnSpeak, btnListen ;
    private EditText etSpeak;
    private TextView outTV;
    private TextToSpeech ttsObj;
    private int result;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnListen = (Button)findViewById(R.id.buttonListen);
        btnSpeak = (Button)findViewById(R.id.buttonSpeak);
        etSpeak = (EditText)findViewById(R.id.editTextIn);
        outTV = (TextView)findViewById(R.id.textViewOut);
        ttsObj = new TextToSpeech(this, new TextToSpeech.OnInitListener() {
            @Override
            public void onInit(int status)
            {
                if (status == TextToSpeech.SUCCESS)
                {
                    result = ttsObj.setLanguage(Locale.US);
                }
                else
                {
                    Toast.makeText(getApplicationContext(),getString(R.string.message),
                            Toast.LENGTH_LONG).show();
                }
            }
        });

        btnSpeak.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(result == TextToSpeech.LANG_NOT_SUPPORTED || result == TextToSpeech.LANG_MISSING_DATA)
                {
                    Toast.makeText(getApplicationContext(),getString(R.string.message),Toast.LENGTH_LONG).show();
                }
                else
                {
                    ttsObj.speak(etSpeak.getText().toString(),TextToSpeech.QUEUE_FLUSH,null);
                }
            }
        });
        btnListen.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(RecognizerIntent.ACTION_RECOGNIZE_SPEECH);
                //use freeform
                i.putExtra(RecognizerIntent.EXTRA_LANGUAGE_MODEL,RecognizerIntent.LANGUAGE_MODEL_FREE_FORM);
                i.putExtra(RecognizerIntent.EXTRA_LANGUAGE,Locale.getDefault());
                i.putExtra(RecognizerIntent.EXTRA_PROMPT,getString(R.string.prompt));
                try {
                    startActivityForResult(i,CODE_A);
                }
                catch (ActivityNotFoundException anf)
                {
                    Toast.makeText(getApplicationContext(),getString(R.string.message),Toast.LENGTH_LONG).show();
                }//end catch


            }
        });
    }

    protected void onActivityResult(int requestCode, int resultCode, Intent data)
    {
        if(requestCode == CODE_A && (data != null) && resultCode == RESULT_OK)
        {
            ArrayList<String> spokenText = data.getStringArrayListExtra(RecognizerIntent.EXTRA_RESULTS);
            outTV.setText(spokenText.get(0));
        }
    }//end Activity Result

    @Override
    protected void onDestroy(){
        super.onDestroy();
        if (ttsObj != null)
        {
            ttsObj.stop();
            ttsObj.shutdown();
        }
    }
}
