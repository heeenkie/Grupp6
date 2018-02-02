package com.example.andreashenriksson.ourapp;

import android.content.Intent;
import android.graphics.Color;
import android.os.CountDownTimer;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class andreas_spel extends AppCompatActivity {


    TextView tv_time;
    Button b_1, b_2, b_3, b_4, b_5, b_6, b_7, b_8, b_9, b_startover, b_start;
    int oldValue, newValue, time= 20, num1, num2, num3, num4, num5, num6, num7, num8, num9;
    CountDownTimer timer;

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
        b_start = (Button) findViewById(R.id.b_start);
        tv_time = (TextView) findViewById(R.id.tv_time);



        b_1.setEnabled(false);
        b_2.setEnabled(false);
        b_3.setEnabled(false);
        b_4.setEnabled(false);
        b_5.setEnabled(false);
        b_6.setEnabled(false);
        b_7.setEnabled(false);
        b_8.setEnabled(false);
        b_9.setEnabled(false);

        timer = new CountDownTimer(20000, 1000){
            @Override
            public void onTick(long millisUntilFinished){
                time--;
                tv_time.setText("Time: " + time);
                b_start.setEnabled(false);
            }

            @Override
            public void onFinish() {
                b_1.setEnabled(false);
                b_2.setEnabled(false);
                b_3.setEnabled(false);
                b_4.setEnabled(false);
                b_5.setEnabled(false);
                b_6.setEnabled(false);
                b_7.setEnabled(false);
                b_8.setEnabled(false);
                b_9.setEnabled(false);
                b_start.setEnabled(true);
                time=20;
                tv_time.setText("Time: " + time);
                timer.cancel();

            }

        };


        b_start.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                b_1.setEnabled(true);
                b_2.setEnabled(true);
                b_3.setEnabled(true);
                b_4.setEnabled(true);
                b_5.setEnabled(true);
                b_6.setEnabled(true);
                b_7.setEnabled(true);
                b_8.setEnabled(true);
                b_9.setEnabled(true);
                timer.start();
            }
            });


        b_1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                b_1.setEnabled(false);
                if (oldValue<newValue)
                    b_1.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_1.setBackgroundColor(Color.parseColor("#ff0000"));
            }
        });

        b_2.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_2.setEnabled(false);
                if (oldValue<newValue)
                    b_2.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_2.setBackgroundColor(Color.parseColor("#ff0000"));
            }
        });

        b_3.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_3.setEnabled(false);
                if (oldValue<newValue)
                    b_3.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_3.setBackgroundColor(Color.parseColor("#ff0000"));
            }

        });

        b_4.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_4.setEnabled(false);
                if (oldValue<newValue)
                    b_4.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_4.setBackgroundColor(Color.parseColor("#ff0000"));
            }
        });

        b_5.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_5.setEnabled(false);
                if (oldValue<newValue)
                    b_5.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_5.setBackgroundColor(Color.parseColor("#ff0000"));
            }
        });

        b_6.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_6.setEnabled(false);
                if (oldValue<newValue)
                    b_6.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_6.setBackgroundColor(Color.parseColor("#ff0000"));
            }
        });

        b_7.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_7.setEnabled(false);
                if (oldValue<newValue)
                    b_7.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_7.setBackgroundColor(Color.parseColor("#ff0000"));
            }
        });

        b_8.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_8.setEnabled(false);
                if (oldValue<newValue)
                    b_8.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_8.setBackgroundColor(Color.parseColor("#ff0000"));
            }
        });

        b_9.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_9.setEnabled(false);
                if (oldValue<newValue)
                    b_9.setBackgroundColor(Color.parseColor("#00ff00"));
                else
                    b_9.setBackgroundColor(Color.parseColor("#ff0000"));

            }
        });


        b_startover.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                b_1.setEnabled(false);
                b_2.setEnabled(false);
                b_3.setEnabled(false);
                b_4.setEnabled(false);
                b_5.setEnabled(false);
                b_6.setEnabled(false);
                b_7.setEnabled(false);
                b_8.setEnabled(false);
                b_9.setEnabled(false);
                b_1.setBackgroundResource(android.R.drawable.btn_default);
                b_2.setBackgroundResource(android.R.drawable.btn_default);
                b_3.setBackgroundResource(android.R.drawable.btn_default);
                b_4.setBackgroundResource(android.R.drawable.btn_default);
                b_5.setBackgroundResource(android.R.drawable.btn_default);
                b_6.setBackgroundResource(android.R.drawable.btn_default);
                b_7.setBackgroundResource(android.R.drawable.btn_default);
                b_8.setBackgroundResource(android.R.drawable.btn_default);
                b_9.setBackgroundResource(android.R.drawable.btn_default);
                time=20;
                b_start.setEnabled(true);
                timer.cancel();
                tv_time.setText("Time: " + time);

            }
        });





            }



    }

