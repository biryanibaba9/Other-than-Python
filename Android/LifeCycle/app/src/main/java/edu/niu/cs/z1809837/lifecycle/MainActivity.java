package edu.niu.cs.z1809837.lifecycle;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity
{
    private String createMsg,startMsg, resumeMsg, pauseMsg, stopMsg, restartMsg;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        initializeMessages();
        Toast.makeText(this,createMsg,Toast.LENGTH_LONG).show();
    }
    private void initializeMessages()
    {
        createMsg = (String)getResources().getText(R.string.create_message);
        startMsg = (String)getResources().getText(R.string.start_message);
        resumeMsg = (String)getResources().getText(R.string.resume_message);
        pauseMsg = (String)getResources().getText(R.string.pause_message);
        stopMsg = (String)getResources().getText(R.string.stop_message);
        restartMsg = (String)getResources().getText(R.string.restart_message);
    }
    @Override
    protected void onStart()
    {
        super.onStart();
        Toast.makeText(this,startMsg,Toast.LENGTH_LONG).show();
    }
    @Override
    protected void onResume()
    {
        super.onResume();
        Toast.makeText(this,resumeMsg,Toast.LENGTH_LONG).show();
    }
    @Override
    protected void onPause()
    {
        super.onPause();
        Toast.makeText(this,pauseMsg,Toast.LENGTH_LONG).show();
    }
    @Override
    protected void onStop()
    {
        super.onStop();
        Toast.makeText(this,stopMsg,Toast.LENGTH_LONG).show();
    }
    @Override
    protected void onRestart()
    {
        super.onRestart();
        Toast.makeText(this,restartMsg,Toast.LENGTH_LONG).show();
    }
}
