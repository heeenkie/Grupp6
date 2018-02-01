package com.example.andreashenriksson.ourapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class andreas_spel extends AppCompatActivity {


    TextView tv_time;
    Button b_1, b_2, b_3, b_4, b_5, b_6, b_7, b_8, b_9, b_startover;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_andreas_spel);



        b_1 = (Button) findViewById(R.id.b_1);
        b_2 = (Button) findViewById(R.id.b_2);
        b_3 = (Button) findViewById(R.id.b_3);
        b_4 = (Button) findViewById(R.id.b_4);
        b_5 = (Button) findViewById(R.id.b_5);
        b_6 = (Button) findViewById(R.id.b_6);
        b_7 = (Button) findViewById(R.id.b_7);
        b_8 = (Button) findViewById(R.id.b_8);
        b_9 = (Button) findViewById(R.id.b_9);
        b_startover = (Button) findViewById(R.id.b_startover);
        tv_time = (TextView) findViewById(R.id.tv_time);

        b_1.setOnClickListener(new View.OnClickListener() {
            @Override
                public void onClick(View view) {
                b_1.setEnabled(false);
            }
        });

        b_2.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_2.setEnabled(false);
            }
        });

        b_3.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_3.setEnabled(false);
            }
        });

        b_4.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_4.setEnabled(false);
            }
        });

        b_5.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_5.setEnabled(false);
            }
        });

        b_6.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_6.setEnabled(false);
            }
        });

        b_7.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_7.setEnabled(false);
            }
        });

        b_8.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_8.setEnabled(false);
            }
        });

        b_9.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_9.setEnabled(false);
                //b_9.setBackgroundColor();
            }
        });


        b_startover.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_1.setEnabled(true);
                b_2.setEnabled(true);
                b_3.setEnabled(true);
                b_4.setEnabled(true);
                b_5.setEnabled(true);
                b_6.setEnabled(true);
                b_7.setEnabled(true);
                b_8.setEnabled(true);
                b_9.setEnabled(true);

            }
        });





            }



    }

